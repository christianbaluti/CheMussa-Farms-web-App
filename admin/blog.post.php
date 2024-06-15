<?php
// Database connection
$servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// File upload handling
$target_dir = "../images/data/blog/";
$uploadOk = 1;
$image_path = "";

// Check if image file is a actual image or fake image
if (isset($_FILES["imageInput"]) && $_FILES["imageInput"]["tmp_name"] != '') {
    $target_file = $target_dir . basename($_FILES["imageInput"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["imageInput"]["tmp_name"]);
    if ($check !== false) {
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size (5MB limit)
        if ($_FILES["imageInput"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // If everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["imageInput"]["tmp_name"], $target_file)) {
                $image_path = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        }
    } else {
        echo "File is not an image.";
        exit;
    }
}

// Sanitize and store form data
$name = $conn->real_escape_string($_POST['name']);
$author = $conn->real_escape_string($_POST['author']);
$field = $conn->real_escape_string($_POST['field']);
$description = $conn->real_escape_string($_POST['description']);
$main_text = $conn->real_escape_string($_POST['main_text']);

$sql = "INSERT INTO blog (name, author, field, description, main_text, image)
        VALUES ('$name', '$author', '$field', '$description', '$main_text', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
