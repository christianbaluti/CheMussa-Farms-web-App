<?php
    $pagename = 'events';
    require 'navbar.php';
?>
        <!-- is search -->


<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
    <div class="greennature-page-title-overlay"></div>
    <div class="greennature-page-title-container container">
        <h1 class="greennature-page-title">Events</h1>
        <span class="greennature-page-caption"> <a href="index.php">Home</a> / Events</span>
    </div>
</div>
<!-- is search -->
<div class="content-wrapper">
    <div class="greennature-content">


        <?php include 'backend/events.read.php'; ?>




    </div>
    <!-- greennature-content -->
    <div class="clear"></div>
</div>
<!-- content wrapper -->
<?php
    require 'footer.php';
?>