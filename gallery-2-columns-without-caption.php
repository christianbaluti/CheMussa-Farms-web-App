<?php
    $pagename = 'gallery';
    require 'navbar.php';
?>
        <!-- is search -->


        <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Take a look at our captured moments</h1>
            </div>
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="section-container container">
                            <div class="greennature-gallery-item greennature-item" style="margin-bottom: 60px;">

                                <?php include 'backend/gallery.read.php'; ?>

                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div3>
                    </section>
                </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-4ontent -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

<?php
    require 'footer.php';
?>