<?php
    $pagename = 'blog';
    require 'navbar.php';
    require './backend/blog.read.php';

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

    // Check if blog_id is present in the URL
    if (isset($_GET['blog_id']) && is_numeric($_GET['blog_id'])) {
        $id = (int)$_GET['blog_id'];

        // SQL query to fetch data from blog table
        $sql = "SELECT * FROM blog WHERE id = :id";

        try {
            // Prepare and execute the query
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            // Fetch the result
            $blog = $stmt->fetch();

            if ($blog) {
                // Assign variables from the result
                $name = $blog['name'];
                $datemade = $blog['datemade'];
                $author = $blog['author'];
                $views = $blog['views'];
                $field = $blog['field'];
                $image = $blog['image'];
                $description = $blog['description'];
                $main_text = $blog['main_text'];

                // Format the date
                $date = new DateTime($datemade);
                $formatted_date = $date->format('d F Y');
                $image = substr($image, 3);

                $thevariable = "
                <div class=\"greennature-page-title-wrapper header-style-5-title-wrapper\">
                    <div class=\"greennature-page-title-overlay\"></div>
                    <div class=\"greennature-page-title-container container\">
                        <h1 class=\"greennature-page-title\">$name</h1>
                    </div>
                </div>

                <div class=\"content-wrapper\">
                    <div class=\"greennature-content\">
                        <div class=\"with-sidebar-wrapper\">
                            <div class=\"with-sidebar-container container\">
                                <div class=\"with-sidebar-left eight columns\">
                                    <div class=\"with-sidebar-content twelve columns\">
                                        <section id=\"content-section-1\">
                                            <div class=\"section-container container\">
                                                <div class=\"blog-item-wrapper\">
                                                    <div class=\"blog-item-holder\">
                                                        <div class=\"greennature-item greennature-blog-full\">
                                                            <div class=\"greennature-ux greennature-blog-full-ux\">
                                                                <article id=\"post-862\" class=\"post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news\">
                                                                    <div class=\"greennature-standard-style\">
                                                                        <div class=\"greennature-blog-thumbnail\">
                                                                            <a href=\"#\"><img src=\"$image\" alt=\"\" width=\"750\" height=\"330\" /></a>
                                                                        </div>

                                                                        <div class=\"greennature-blog-date-wrapper\">
                                                                            <div class=\"greennature-blog-day\"></div>
                                                                            <div class=\"greennature-blog-month\">$formatted_date</div>
                                                                        </div>

                                                                        <div class=\"blog-content-wrapper\">
                                                                            <header class=\"post-header\">
                                                                                <h3 class=\"greennature-blog-title\"><p>$description</p></h3>
                                                                                <div class=\"greennature-blog-info\">
                                                                                    <div class=\"blog-info blog-comment greennature-skin-info\"><i class=\"fa fa-comment-o\"></i><a href=\"#respond\">$views<span class=\"greennature-tail\"> views</span></a></div>
                                                                                    <div class=\"blog-info blog-author greennature-skin-info\"><i class=\"fa fa-pencil\"></i><a href=\"#\" title=\"Posts by $author\" rel=\"author\">$author</a></div>
                                                                                    <div class=\"blog-info blog-category greennature-skin-info\"><i class=\"fa fa-folder-open-o\"></i><a href=\"#\" rel=\"tag\">Blog</a><span class=\"sep\">,</span> <a href=\"#\" rel=\"tag\">$field</a></div>
                                                                                    <div class=\"clear\"></div>
                                                                                </div>
                                                                                <div class=\"clear\"></div>
                                                                            </header>

                                                                            <div class=\"greennature-blog-content\" style=\"text-align: justify; font-size: 18px; margin: 2px;\">
                                                                                $main_text
                                                                                <div class=\"clear\"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"clear\"></div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"clear\"></div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
            } else {
                $thevariable = "<p>No blog post found.</p>";
            }
        } catch (\PDOException $e) {
            // Handle query error
            $thevariable = 'Query failed: ' . $e->getMessage();
        }
    } else {
        $thevariable = "<p>Invalid blog ID.</p>";
    }
?>
<?php echo $thevariable; ?>


                                                                   
                                                                   

                        <div class="greennature-sidebar greennature-right-sidebar four columns">
                          
                          <br>
                                <br>
                                
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