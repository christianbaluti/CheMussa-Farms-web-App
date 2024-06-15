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
$name = $conn->real_escape_string($_POST['name']);
$id = $conn->real_escape_string($_POST['id']);
$second_text = $conn->real_escape_string($_POST['second_text']);
$paragraph = $conn->real_escape_string($_POST['paragraph']);

// Use a prepared statement to update the table
$sql = "UPDATE about_home_page_image SET name = ?, second_text = ?, paragraph = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssi", $name, $second_text, $paragraph, $id);
    
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
