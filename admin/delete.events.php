<?php
// Assuming you have already established a database connection

// Database connection (replace with your actual database credentials)
    $servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $eventId = $_POST['id'];

        // SQL query to delete the blog entry
        $sql = "DELETE FROM events WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $eventId);

        if ($stmt->execute()) {
            $response['success'] = true;
        } else {
            $response['success'] = false;
        }

        $stmt->close();
    } else {
        $response['success'] = false;
    }
} else {
    $response['success'] = false;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
