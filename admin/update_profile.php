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
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mission = $_POST['mision'] ?? '';
    $vision = $_POST['vision'] ?? '';
    $moto = $_POST['moto'] ?? '';
    $short_about = $_POST['short_about'] ?? '';

    try {
        $sql = "UPDATE profile SET mission = ?, vision = ?, moto = ?, short_about = ? WHERE id = 0";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$mission, $vision, $moto, $short_about]);
        echo json_encode(['status' => 'success']);
    } catch (\PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
?>
