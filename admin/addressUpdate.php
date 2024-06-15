<?php
// Include database connection details
$host = 'localhost';
$db = 'u289533873_kumitengo';
$user = 'u289533873_faith';
$pass = 'Mannersmakesaman1722*';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $address = $_POST['address'] ?? null;

    $sql = "UPDATE profile SET address = ? WHERE id = 0";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$address]);
        echo json_encode(['status' => 'success', 'message' => 'Address updated successfully.']);
    } catch (\PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Query failed: ' . $e->getMessage()]);
    }
}
?>
