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

$sql = "SELECT * FROM gallery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td><img src="' . $row['image'] . '" width="auto" height="100px"></td>';
        echo '<td>' . date('Y/m/d', strtotime($row['created_at'])) . '</td>';
        echo '<td><button class="btn btn-danger deleteImage" data-id="' . $row['id'] . '">Delete</button></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="3">No images found</td></tr>';
}

$conn->close();
?>
