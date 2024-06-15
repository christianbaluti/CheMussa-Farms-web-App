<?php
// Database credentials
$host = 'localhost';
$db = 'u289533873_kumitengo';
$user = 'u289533873_faith';
$pass = 'Mannersmakesaman1722*';
$charset = 'utf8mb4';

// Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options for PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Handle connection error
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $logo = $_FILES['logo'];
        $uploadDir = './../images/data/profile/';
        $uploadFile = $uploadDir . basename($logo['name']);

        // Validate the file type and size (e.g., only allow PNG, JPG, JPEG, and limit size to 2MB)
        $fileType = pathinfo($uploadFile, PATHINFO_EXTENSION);
        $allowedTypes = ['png', 'jpg', 'jpeg'];
        if (!in_array(strtolower($fileType), $allowedTypes) || $logo['size'] > 2097152) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type or file too large.']);
            exit;
        }

        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($logo['tmp_name'], $uploadFile)) {
            try {
                // Update the database with the new logo path
                $sql = "UPDATE profile SET logo = :logo WHERE id = 0";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['logo' => $uploadFile]);

                header('Content-Type: application/json');
                echo json_encode(['status' => 'success', 'message' => 'Logo updated successfully.']);
            } catch (\PDOException $e) {
                header('Content-Type: application/json');
                echo json_encode(['status' => 'error', 'message' => 'Database update failed: ' . $e->getMessage()]);
            }
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file.']);
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'No file uploaded or upload error.']);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
