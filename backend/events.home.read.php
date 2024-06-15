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
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Handle connection error
    echo 'Connection failed: ' . $e->getMessage();
    exit; // Stop further execution if connection fails
}

// SQL query to fetch all data from events table
$sql = "SELECT * FROM events";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $events = $stmt->fetchAll();

    // Function to display the first 20 words of a text
    function display_first_20_words($text) {
        // Split the text into an array of words
        $words = explode(' ', $text);

        // Check if the number of words is greater than 20
        if (count($words) > 20) {
            // Slice the array to get only the first 20 words
            $words = array_slice($words, 0, 20);
            // Join the words back into a string and add ellipsis
            $text = implode(' ', $words) . '...';
        }

        // Return the result
        return $text;
    }

    // Check if there are any events
    if ($events) {
        // Iterate through the results and assign them to variables
        foreach ($events as $row) {
            $Eid = $row['id'];
            $Ename = $row['name'];
            $Efield = $row['field'];
            $Eparagraph = $row['main_text'];
            $Eimage1 = $row['image1'];
            $Eimage2 = $row['image2'];
            $Eimage3 = $row['image3'];

            echo '<div class="three columns">
                <div class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                    <div class="greennature-ux greennature-classic-portfolio-ux">
                        <div class="portfolio-thumbnail greennature-image">
                            <img src="' . htmlspecialchars($Eimage1) . '" alt="" width="540" height="326" />
                            <span class="portfolio-overlay">&nbsp;</span>
                            <a class="portfolio-overlay-icon" href="#"><span class="portfolio-icon"><i class="fa fa-link"></i></span></a>
                        </div>
                        <div class="portfolio-classic-content">
                            <h3 class="portfolio-title"><a href="singleprod.php?event_id=' . htmlspecialchars($Eid) . '">' . htmlspecialchars($Ename) . '</a></h3>
                            <div class="greennature-portfolio-info">
                                <div class="portfolio-info portfolio-tag">
                                    <span class="info-head greennature-title">Tags </span>
                                    <a href="#" rel="tag">' . htmlspecialchars($Efield) . '</a>
                                    <span class="sep">,</span> 
                                    <a href="#" rel="tag">Trees</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="portfolio-excerpt">' . display_first_20_words(htmlspecialchars($Eparagraph)) . '<div class="clear"></div><a href="#" class="excerpt-read-more">Read More</a></div>
                            <a class="portfolio-classic-learn-more" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo "No events now";
    }
} catch (\PDOException $e) {
    // Handle query error
    echo 'Query failed: ' . $e->getMessage();
}
?>
