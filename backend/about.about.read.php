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
$sql = "SELECT * FROM about_statements_about_page WHERE id=1";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $id = $row['id'];
        $statement11  = $row['statement1'];
        $italized_text1 = $row['italized_text'];
        $paragraph1 = $row['main_text'];
        // You can now use these variables as needed
        // Example: echo $title;
    }
} catch (\PDOException $e) {
    // Handle query error
    echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from About_about_page table
$sql = "SELECT * FROM about_statements_about_page WHERE id=2";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $id = $row['id'];
        $statement12  = $row['statement1'];
        $italized_text2 = $row['italized_text'];
        $paragraph2 = $row['main_text'];
        // You can now use these variables as needed
        // Example: echo $title;
    }
} catch (\PDOException $e) {
    // Handle query error
    echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from About_about_page table
$sql = "SELECT * FROM about_statements_about_page WHERE id=3";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $id = $row['id'];
        $statement13  = $row['statement1'];
        $italized_text3 = $row['italized_text'];
        $paragraph3 = $row['main_text'];
        // You can now use these variables as needed
        // Example: echo $title;
    }
} catch (\PDOException $e) {
    // Handle query error
    echo 'Query failed: ' . $e->getMessage();
}



?>
