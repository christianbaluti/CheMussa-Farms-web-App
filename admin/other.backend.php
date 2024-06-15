<?php
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

function checkTable($pdo, $tableName) {
    $sql = "SELECT * FROM $tableName";
    $stmt = $pdo->query($sql);
    return ($stmt->rowCount() > 0) ? 1 : 0;
}

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Check each table and set the corresponding variable
    $checkdata = checkTable($pdo, 'about_about_page');
    $checkdata1 = checkTable($pdo, 'about_about_page');
    $checkdata2 = checkTable($pdo, 'about_home_page_image');
    $checkdata3 = checkTable($pdo, 'about_statements_about_page');
    $checkdata4 = checkTable($pdo, 'home_3_paragraphs');
    $checkdata5 = checkTable($pdo, 'service_service_page_3');
    $checkdata6 = checkTable($pdo, 'service_service_page_4');
    $checkdata7 = checkTable($pdo, 'service_service_page_1');
    $checkdata8 = checkTable($pdo, 'service_service_page_video');
} catch (\PDOException $e) {
    // Handle connection error
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
