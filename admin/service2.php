<?php
// Database connection
$servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

// Sanitize and store form data
$name = $conn->real_escape_string($_POST['name22222']);
$id = $conn->real_escape_string($_POST['id22222']);
$main_text = $conn->real_escape_string($_POST['main_text22222']);

// Use a prepared statement to update the table
$sql = "UPDATE service_service_page_4
        SET name = ?, main_text = ?
        WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssi", $name, $main_text, $id); // "ssi" means two strings followed by an integer

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
