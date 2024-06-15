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

// Initialize variables
$image_path = "";

// Check if file input is set
if (isset($_FILES["imageInput"]) && $_FILES["imageInput"]["size"] > 0) {
    // File upload handling
    $target_dir =  "./../images/data/profile/";
    $target_file = $target_dir . basename($_FILES["imageInput"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["imageInput"]["tmp_name"]);
    if ($check !== false) {
        // Validate file extension
        $allowed_file_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowed_file_types)) {
            echo json_encode(["status" => "error", "message" => "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed."]);
            exit;
        }
        // Move uploaded file
        if (move_uploaded_file($_FILES["imageInput"]["tmp_name"], $target_file)) {
            $image_path = $conn->real_escape_string($target_file);
        } else {
            echo json_encode(["status" => "error", "message" => "Error uploading file."]);
            exit;
        }
    } else {
        echo json_encode(["status" => "error", "message" => "File is not an image."]);
        exit;
    }
}

// Sanitize and store form data
$sentence1 = $conn->real_escape_string($_POST['sentence1']);
$title = $conn->real_escape_string($_POST['title']);
$subtitle = $conn->real_escape_string($_POST['subtitle']);
$main_text = $conn->real_escape_string($_POST['details']);
$id = 1;

// Use a prepared statement to update the table
$sql = "UPDATE about_about_page SET sentence1 = ?, title = ?, subtitle = ?, main_text = ?";
$params = ["ssss", $sentence1, $title, $subtitle, $main_text];

if (!empty($image_path)) {
    $sql .= ", main_image = ?";
    $params[0] .= "s"; // Add another "s" for main_image
    $params[] = $image_path; // Add main_image to the parameters array
}

$sql .= " WHERE id = ?";
$params[0] .= "i"; // Add "i" for the id parameter
$params[] = $id; // Add id to the parameters array

$stmt = $conn->prepare($sql);
call_user_func_array([$stmt, 'bind_param'], $params);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Record updated successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error updating record: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
