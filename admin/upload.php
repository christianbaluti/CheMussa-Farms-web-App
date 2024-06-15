<?php
// Database connection
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
    if (isset($_FILES['file']) && isset($_POST['imgId'])) {
        $imgId = $_POST['imgId'];
        $uploadDir = './../images/data/profile/';
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);
        
        // Move the uploaded file to the designated directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            // Determine the correct column based on imgId
            $columnMap = [
                'mission_vission_moto_image' => 'mission_vission_moto_image',
                'second_image_home' => 'second_image_home',
                'carousel1' => 'carousel1',
                'carousel2' => 'carousel2',
                'carousel3' => 'carousel3',
                'service_image' => 'service_image',
                'events_image' => 'events_image',
                'about_image' => 'about_image',
                'gallery_image' => 'gallery_image',
                'blog_image' => 'blog_image',
                'contact_image' => 'contact_image'
            ];

            if (array_key_exists($imgId, $columnMap)) {
                $column = $columnMap[$imgId];

                
                // Prepare the SQL statement
                $stmt = $conn->prepare("UPDATE profile SET $column = ? WHERE id = 0");
                $uploadFile = substr($uploadFile, 3);
                $stmt->bind_param('s', $uploadFile);
                
                // Execute the query
                if ($stmt->execute()) {
                    echo json_encode(['success' => true, 'newImagePath' => $uploadFile]);
                } else {
                    echo json_encode(['success' => false, 'error' => 'Failed to update database']);
                }

                $stmt->close();
            } else {
                echo json_encode(['success' => false, 'error' => 'Invalid image ID']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to upload file']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'File or imgId not set']);
    }
}

$conn->close();
?>
