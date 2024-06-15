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

// SQL query to fetch all data from About_about_page table
$sql = "SELECT * FROM About_about_page";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $id = $row['id'];
        $sentence1 = $row['sentence1'];
        $main_image = $row['main_image'];
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $main_text = $row['main_text'];

        // You can now use these variables as needed
        // Example: echo $title;
    }
} catch (\PDOException $e) {
    // Handle query error
    echo 'Query failed: ' . $e->getMessage();
}
?>
