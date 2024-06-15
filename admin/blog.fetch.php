<?php
$servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $conn->real_escape_string($_GET['id']);

$sql = "SELECT id, name, author, field, description, main_text, image, DATE_FORMAT(datemade, '%Y/%m/%d') AS date_made FROM blog WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo "No record found";
}

$conn->close();
?>
