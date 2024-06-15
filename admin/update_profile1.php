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
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone1 = $_POST['phone1'] ?? null;
    $phone2 = $_POST['phone2'] ?? null;
    $facebook = $_POST['facebook'] ?? null;
    $instagram = $_POST['instagram'] ?? null;
    $twitter = $_POST['twitter'] ?? null;
    $linkedin = $_POST['linkedin'] ?? null;

    $sql = "UPDATE profile SET name = ?, email = ?, phone1 = ?, phone2 = ?, facebook = ?, instagram = ?, twitter = ?, linkedin = ? WHERE id = 0";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $phone1, $phone2, $facebook, $instagram, $twitter, $linkedin]);
        echo json_encode(['status' => 'success', 'message' => 'Profile updated successfully.']);
    } catch (\PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Query failed: ' . $e->getMessage()]);
    }
}
?>
