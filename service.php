<?php
    $pagename = 'service';
    require 'navbar.php';
    include 'backend/profile.read.php';
?>

        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0" style="background-image: url(' <?php echo $Pservice_image; ?> '); padding-top: 260px; padding-bottom: 140px; ">
                            <div class="container">
                                <div class="greennature-title-item">
                                    <div class="greennature-item-title-wrapper greennature-item  greennature-center greennature-extra-large ">
                                        <div class="greennature-item-title-container container">
                                            <div class="greennature-item-title-head">
                                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">WHAT WE DO?</h3>
                                                <div class="greennature-item-title-caption greennature-skin-info">Here are our products and services at <?php echo $Pname; ?></div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>

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
$sql = "SELECT * FROM service_service_page_1 WHERE id=1";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid1 = $row['id'];
        $Sname1 = $row['name'];
        $Smain_text1 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_1 WHERE id=2";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid2 = $row['id'];
        $Sname2 = $row['name'];
        $Smain_text2 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}



// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_1 WHERE id=3";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid3 = $row['id'];
        $Sname3 = $row['name'];
        $Smain_text3 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_3 WHERE id=1";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid21 = $row['id'];
        $Sname21 = $row['name'];
        $Smain_text21 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_3 WHERE id=2";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid22 = $row['id'];
        $Sname22 = $row['name'];
        $Smain_text22 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_3 WHERE id=3";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid23 = $row['id'];
        $Sname23 = $row['name'];
        $Smain_text23 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}


// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_3 WHERE id=4";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid24 = $row['id'];
        $Sname24 = $row['name'];
        $Smain_text24 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}

// SQL query to fetch all data from profile table
$sql = "SELECT * FROM service_service_page_4";

try {
    // Prepare and execute the query
    $stmt = $pdo->query($sql);

    // Fetch all the results
    $aboutPages = $stmt->fetchAll();

    // Iterate through the results and assign them to variables
    foreach ($aboutPages as $row) {
        $Sid31 = $row['id'];
        $Sname31 = $row['name'];
        $Smain_text31 = $row['main_text'];
                                                                   }
} catch (\PDOException $e) {
    // Handle query error
    //echo 'Query failed: ' . $e->getMessage();
}



?>


                    <section id="content-section-2">
                        <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-light-grey" style="background-color: #f0f0f0; padding-bottom: 15px; ">
                            <div class="container">
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-1" style="margin-bottom: 45px;">
                                            <div class="column-service-image"><img src="upload/icon-2-1.png" alt="" width="40" height="40" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title"><?php echo $Sname1; ?> </h3>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p><?php echo $Smain_text1; ?></p>
                                                <!--</div><a class="column-service-read-more" href="#">Read More</a></div>-->
                                        </div>
                                    </div>
                                </div>
                                
                               
                                
                            </div>
                        </div>
                         <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-1" style="margin-bottom: 45px;">
                                            <div class="column-service-image"><img src="upload/icon-2-1.png" alt="" width="40" height="40" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title"><?php echo $Sname2; ?></h3>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p><?php echo $Smain_text2; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                               
                                
                            </div>
                        </div>
                         <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-1" style="margin-bottom: 45px;">
                                            <div class="column-service-image"><img src="upload/icon-2-1.png" alt="" width="40" height="40" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title"><?php echo $Sname3; ?></h3>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p><?php echo $Smain_text3; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                              
                                
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-3">
                        <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; ">
                            <div class="container">
                                <div class="six columns">
                                    <div class="greennature-video-item greennature-item">
                                        
                                        <iframe title="vimeo-player" src="https://player.vimeo.com/video/939516578?h=f493fde662" width="640" height="360" frameborder="0"    allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="six columns">
                                    <div class="greennature-item greennature-about-us-item greennature-normal">
                                        <div class="about-us-title-wrapper">
                                            <h3 class="about-us-title">Our Sustainability Initiatives</h3>
                                            <div class="about-us-caption greennature-title-font greennature-skin-info">The first rule of sustainability is to align with natural forces, or at least not try to defy them.</div>
                                            <div class="about-us-title-divider"></div>
                                        </div>
                                        <div class="about-us-content-wrapper">
                                            <div class="about-us-content greennature-skin-content">
                                                <p><?php echo $Pshort_about; ?>.</p>
                                            <!--</div><a class="about-us-read-more greennature-button" href="#">Learn More</a></div>-->
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-4">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" id="greennature-parallax-wrapper-2" data-bgspeed="0.1" style="background-image: url('images/service/service.jpg'); padding-top: 125px; padding-bottom: 90px; ">
                            <div class="container">
                                <div class="three columns">
                                    <div class="greennature-skill-item-title" style="color: #5dc269;"><?php echo $Sname21; ?></div>
                                        <div class="about-us-content greennature-skin-content">
                                                <p><?php echo $Smain_text21; ?></p>
                                            <!--</div><a class="about-us-read-more greennature-button" href="#">Learn More</a></div>-->
                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                    </div>
                                        
                                </div>
                                <div class="three columns">
                                    <div class="greennature-skill-item-title" style="color: #5dc269;"><?php echo $Sname22; ?></div>
                                        <div class="about-us-content greennature-skin-content">
                                                <p><?php echo $Smain_text22; ?></p>
                                            <!--</div><a class="about-us-read-more greennature-button" href="#">Learn More</a></div>-->
                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                    </div>
                                        
                                </div>
                                <div class="three columns">
                                    <div class="greennature-skill-item-title" style="color: #5dc269;"><?php echo $Sname23; ?></div>
                                        <div class="about-us-content greennature-skin-content">
                                                <p><?php echo $Smain_text23; ?></p>
                                            <!--</div><a class="about-us-read-more greennature-button" href="#">Learn More</a></div>-->
                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                    </div>
                                        
                                </div>
                                <div class="three columns">
                                    <div class="greennature-skill-item-title" style="color: #5dc269;"><?php echo $Sname24; ?></div>
                                        <div class="about-us-content greennature-skin-content">
                                                <p><?php echo $Smain_text24; ?></p>
                                            <!--</div><a class="about-us-read-more greennature-button" href="#">Learn More</a></div>-->
                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                    </div>
                                        
                                </div>
                            </div>
                               
                               
                                
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-5">
                        <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #f3f3f3; padding-top: 85px; padding-bottom: 62px; ">
                            <div class="container">
                                <div class="greennature-stunning-item-ux greennature-ux">
                                    <div class="greennature-item greennature-stunning-item greennature-stunning-center">
                                        <h2 class="stunning-item-title"><?php echo $Sname31; ?></h2>
                                        <div class="stunning-item-caption greennature-skin-content">
                                            <p><?php echo $Smain_text31; ?></p>
                                        </div>
                                    <!--<a class="stunning-item-button greennature-button large greennature-lb-payment" href="#" style="background-color: #fec428; color: #ffffff;">Donate Now!</a>-->
                                        <a class="stunning-item-button greennature-button large" href="contact-page.php">Contact Us</a>
                                        </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->



<?php
    require 'footer.php';
?>