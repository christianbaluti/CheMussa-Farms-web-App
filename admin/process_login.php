<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

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
        $pdo = new PDO($dsn, $user, $pass, $options);

        // Query to check if the email exists
        $stmt = $pdo->prepare('SELECT * FROM admin2024 WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['admin_email'] = $user['email'];
            header('Location: index.php');
            exit;
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
        }
    } catch (\PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
