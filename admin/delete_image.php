<?php
$servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Fetch image path to delete file
    $sql = "SELECT image FROM gallery WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['image'];

        // Delete image from directory
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete image record from database
        $sql = "DELETE FROM gallery WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Image deleted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Image not found.";
    }
}

$conn->close();
?>