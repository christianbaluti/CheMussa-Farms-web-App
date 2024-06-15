<?php
// Database connection details
$host = 'localhost';
$dbname = 'u289533873_kumitengo';
$username = 'u289533873_faith';
$password = 'Mannersmakesaman1722*';
$charset = 'utf8mb4';

// Establishing database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize and store form data
$name = $conn->real_escape_string($_POST['name2222222']);
$id = $conn->real_escape_string($_POST['id2222222']);
$iframe = $conn->real_escape_string($_POST['iframe2222222']);
$italized_text = $conn->real_escape_string($_POST['italized_text2222222']);
$main_text = $conn->real_escape_string($_POST['main_text2222222']);

// Use a prepared statement to update the table
$sql = "UPDATE service_service_page_video
        SET name = ?, iframe = ?, italized_text = ?, main_text = ?
        WHERE id = ?";

$stmt = $conn->prepare($sql);

// Bind parameters and execute statement
if ($stmt) {
    $stmt->bind_param("ssssi", $name, $iframe, $italized_text, $main_text, $id); // "ssssi" means four strings followed by an integer

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Record updated successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error updating record: " . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Statement preparation failed: " . $conn->error]);
}

$conn->close();
?>
