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

// SQL query to fetch all data from profile table
$sql = "SELECT * FROM profile";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Pid = $row['id'];
        $Pname = $row['name'];
        $Plogo = $row['logo'];
        $Pemail = $row['email'];
        $Pphone1 = $row['phone1'];
        $Pphone2 = $row['phone2'];
        $Pfacebook = $row['facebook'];
        $Pinstagram = $row['instagram'];
        $Plinkedin = $row['linkedin'];
        $Ptwitter = $row['twitter'];
        $Pmision = $row['mission'];
        $Pvision = $row['vision'];
        $Pmoto = $row['moto'];
        $Pmission_vission_moto_image = $row['mission_vission_moto_image'];
        $Paddress = $row['address'];
        $Pshort_about = $row['short_about'];
        $Psecond_image_home = $row['second_image_home'];
        $Pcarousel1 = $row['carousel1'];
        $Pcarousel2 = $row['carousel2'];
        $Pcarousel3 = $row['carousel3'];
        $Pservice_image = $row['service_image'];
        $Pevents_image = $row['events_image'];
        $Pabout_image = $row['about_image'];
        $Pgallery_image = $row['gallery_image'];
        $Pblog_image = $row['blog_image'];
        $Pcontact_image = $row['contact_image'];
    }
} catch (\PDOException $e) {
    // Handle query error
    echo 'Query failed: ' . $e->getMessage();
}
?>
