<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Team-Members.css">
</head>

<body>
    <div class="container">
        <div class="row text-center">

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
                $sql = "SELECT * FROM team_about_page";

                try {
                    // Prepare and execute the query
                    $stmt = $pdo->query($sql);

                    // Fetch all the results
                    $aboutPages = $stmt->fetchAll();

                    // Iterate through the results and assign them to variables
                    foreach ($aboutPages as $row) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $position = $row['position'];
                        $statement = $row['statement'];
                        $facebook = $row['facebook'];
                        $instagram = $row['instagram'];
                        $twitter = $row['twitter'];
                        $linkedin = $row['linkedin'];
                        $image = $row['image'];
                        $image = substr($image, 2);

                        echo '<div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white roundedd shadow-sm py-5 px-4"><img src="' . $image . '" alt="" style="width: auto; height: 200px" class="img-fluid roundedd-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">' .$name. '</h5><span class="small text-uppercase text-muted">' .$position. '</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="' .$facebook. '" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="' .$twitter. '" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="' .$instagram. '" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="' .$linkedin. '" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->';

                    }
                } catch (\PDOException $e) {
                    // Handle query error
                    echo 'Query failed: ' . $e->getMessage();
                }
                ?>


        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>