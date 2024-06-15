<?php
    $pagename = 'blog';
    require 'navbar.php';

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

?>
        <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Read Our Blogs</h1>
                <!--<span class="greennature-page-caption">Read More</span>-->
            </div>
        </div>
        
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                     
                    <div class="with-sidebar-container container">
                        <div class="with-sidebar-left eight columns">
                            <div class="with-sidebar-content twelve columns">
                                <section id="content-section-1">
                                    <div class="section-container container">
                                        <div class="blog-item-wrapper">
                                            <div class="blog-item-holder">
                                                <div class="greennature-item greennature-blog-full">
                                                    <div class="greennature-ux greennature-blog-full-ux">
        <?php
            try {
                // Create a new PDO instance
                $pdo = new PDO($dsn, $user, $pass, $options);
            } catch (\PDOException $e) {
                // Handle connection error
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }

            // SQL query to fetch all data from About_about_page table
            $sql = "SELECT * FROM blog";

            try {
                // Prepare and execute the query
                $stmt = $pdo->query($sql);

                // Fetch all the results
                $aboutPages = $stmt->fetchAll();

                // Iterate through the results and assign them to variables
                foreach ($aboutPages as $row) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $datemade = $row['datemade'];
                    $author = $row['author'];
                    $views = $row['views'];
                    $field = $row['field'];
                    $image = $row['image'];
                    $description = $row['description'];
                    $main_text = $row['main_text'];


                function get_first_n_words($string, $n = 20) {
                    $words = explode(' ', $string);
                    if (count($words) > $n) {
                        return implode(' ', array_slice($words, 0, $n)) . '...';
                    }
                    return $string;
                }
                $short_text = get_first_n_words($main_text, 20);

                $date = new DateTime($datemade);

                // Format the date as "d F Y"
                $formatted_date = $date->format('d F Y');


            echo '<article id="post-862" class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
            <div class="greennature-standard-style">
                <div class="greennature-blog-thumbnail">
                    <a href="blog-details.php?blog_id=' . $row['id']. '"> <img src="';

            $image = substr($image, 3);
            echo $image;
            echo '" stye="width: 750px; height: 330px" /></a>
                </div>

                <div class="greennature-blog-date-wrapper">
                    <div class="greennature-blog-day"></div>
                    <div class="greennature-blog-month">' . htmlspecialchars($formatted_date);
            echo '</div>
                </div>

                <div class="blog-content-wrapper">
                    <header class="post-header">
                        <h3 class="greennature-blog-title"><a href="blog-details.php?blog_id=' . $row['id'] . '">';
            echo $description . ' </a></h3>

                        <div class="greennature-blog-info">
                            <div class="blog-info blog-comment greennature-skin-info"><i class="fa fa-comment-o"></i><a href="##respond">' . $views;
            echo ' <span class="greennature-tail" >Views</span></a></div>
                            <div class="blog-info blog-author greennature-skin-info"><i class="fa fa-pencil"></i><a href="#" title="" rel="author">' .$author;
            echo '</a></div>
                            <div class="blog-info blog-category greennature-skin-info"><i class="fa fa-folder-open-o"></i><span class="sep"></span> <a href="#" rel="tag">' . $field;
            echo '</a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </header>
                    <!-- entry-header -->

                    <div class="greennature-blog-content">
                <p id="full-text" class="full-text">' .$short_text . '</p>';

            echo '<div class="clear"></div></div>
                </div>
                <!-- blog content wrapper -->
                <div class="clear"></div>
            </div>
        </article>';

        echo " ";


                }
            } catch (\PDOException $e) {
                // Handle query error
                echo 'Query failed: ' . $e->getMessage();
            }

        ?>
                                                         
                                                                   
                                                        <!-- #post -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="greennature-sidebar greennature-right-sidebar four columns">
                            <div class="greennature-item-start-content sidebar-right-item">
                        
                                <div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Recent Works</h3>
                                    <div class="clear"></div>
                                    <div class="greennature-recent-port-widget">
                                        <div class="recent-post-widget">
                                            <div class="recent-post-widget-thumbnail">
                                                <a href="#"><img src="images/events/event10.jpg" alt="" width="150" height="150" /></a>
                                            </div>
                                            <div class="recent-post-widget-content">
                                                <div class="recent-post-widget-title"><a href="#">Kumitengo Grand Opening</a></div>
                                                <div class="recent-post-widget-info">
                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">22 April 2024</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div id="recent-comments-3" class="widget widget_recent_comments greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Recent Comments</h3>
                                    <div class="clear"></div>
                                    <ul id="recentcomments">
                                        <li class="recentcomments"><span class="comment-author-link">Marc Kampala</span> on <a href="#">Modern Farming Methods</a></li>
                                        <li class="recentcomments"><span class="comment-author-link">Bill </span> on <a href="#">Modern Farming Methods</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
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