<?php
// Database connection
$host = 'localhost';
$db = 'u289533873_kumitengo';
$user = 'u289533873_faith';
$pass = 'Mannersmakesaman1722*';
$charset = 'utf8mb4';

    $servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$randomNumber = rand(100000, 999999);
$unique = 'image' . $randomNumber;
// File upload handling
$target_dir = "./../images/data/gallery/";
$target_file = $target_dir . $unique . basename($_FILES["imageInput"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is an actual image or fake image
if (isset($_FILES["imageInput"])) {
    $check = getimagesize($_FILES["imageInput"]["tmp_name"]);
    if ($check !== false) {
        if (!move_uploaded_file($_FILES["imageInput"]["tmp_name"], $target_file)) {
            echo "Error uploading file.";
            exit;
        }
    } else {
        echo "File is not an image.";
        exit;
    }
} else {
    echo "No file uploaded.";
    exit;
}

// Sanitize and store form data
$name = $conn->real_escape_string($_POST['name']);
$image_path = $conn->real_escape_string($target_file);

$sql = "INSERT INTO gallery (name, image)
        VALUES ('$name', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
