<?php
    $pagename = 'events';
    require 'navbar.php';
    include 'backend/profile.read.php';
?>

<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
    <div class="greennature-page-title-overlay"></div>
    <div class="greennature-page-title-container container">
        <h1 class="greennature-page-title">OUR EVENTS</h1>
        <span class="greennature-page-caption">Learn Something New Today with What We Do</span>
    </div>
</div>
<!-- is search -->
<div class="content-wrapper">
    <div class="greennature-content">

        <!-- Above Sidebar Section-->
        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
             
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left nine columns">
                    <div class="with-sidebar-content eight columns">
                        <section id="content-section-1">
                            <div class="section-container container">
                                <div class="portfolio-item-wrapper type-classic-portfolio" data-ajax="https://demo.goodlayers.com/greennature/wp-admin/admin-ajax.php">
                                    <div class="portfolio-item-holder  greennature-portfolio-column-1">
                                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                            <div class="clear"></div>
                                            <div class="twelve columns">
                                                <!--events-->
                                                <?php include 'backend/events.read.main.php'; ?>

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="greennature-pagination"><span aria-current='page' class='page-numbers current'>1</span>
                                        <a class="next page-numbers" href="#" disabled>Next &rsaquo;</a></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </section>
                    </div>

                    <div class="greennature-sidebar greennature-left-sidebar four columns">
                        <div class="greennature-item-start-content sidebar-left-item">
                            <div id="recent-comments-4" class="widget widget_recent_comments greennature-item greennature-widget">
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

                <div class="greennature-sidebar greennature-right-sidebar three columns">
                    <div class="greennature-item-start-content sidebar-right-item">
                        <div id="recent-posts-3" class="widget widget_recent_entries greennature-item greennature-widget">
                            <h3 class="greennature-widget-title">Recent Posts</h3>
                            <div class="clear"></div>
                            <ul>
                                <li>
                                    <a href="singleprod.php">Kumitengo Farm Official Grand opening</a>
                                </li>
                            </ul>
                        </div>
                        <div id="categories-3" class="widget widget_categories greennature-item greennature-widget">
                            <h3 class="greennature-widget-title">Categories</h3>
                            <div class="clear"></div>
                            <ul>
                                <li class="cat-item cat-item-2"><a href="singleprod.php">Events</a> (1)
                                </li>
                                <li class="cat-item cat-item-3"><a href="singleprod.php">Farming</a> (1)
                                </li>
                                </li>
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