<?php
$servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $conn->real_escape_string($_POST['blogId']);
$name = $conn->real_escape_string($_POST['name']);
$author = $conn->real_escape_string($_POST['author']);
$field = $conn->real_escape_string($_POST['field']);
$description = $conn->real_escape_string($_POST['description']);
$main_text = $conn->real_escape_string($_POST['main_text']);
$image_path = '';

if (isset($_FILES["imageInput"]) && $_FILES["imageInput"]["error"] == 0) {
    $target_dir = "../images/data/blog";
    $target_file = $target_dir . basename($_FILES["imageInput"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["imageInput"]["tmp_name"]);
    if ($check !== false) {
        move_uploaded_file($_FILES["imageInput"]["tmp_name"], $target_file);
        $image_path = $conn->real_escape_string($target_file);
    } else {
        echo "File is not an image.";
        exit;
    }
}

$sql = "UPDATE blog SET name='$name', author='$author', field='$field', description='$description', main_text='$main_text'";

if ($image_path) {
    $sql .= ", image='$image_path'";
}

$sql .= " WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
