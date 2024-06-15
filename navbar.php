<!DOCTYPE html>
<!--[if IE 7]><php class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><php class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->


<!-- index19:10 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
<?php include 'backend/profile.read.php'; ?>
    <title><?php echo $Pname; ?></title>


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/superfish/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/dl-menu/component.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/master-custom.css' type='text/css' media='all' />


</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-left">
                        <div class="top-navigation-left-text">
                            Phone : <?php echo $Pphone1 .' ' . $Pphone2; ?>      Email : <?php echo $Pemail; ?>
                        </div>
                    </div>
                    <div class="top-navigation-right">
                        <div class="top-social-wrapper">
                            <div class="social-icon">
                                <a href="<?php echo $Pfacebook; ?>" target="_blank">
                                    <i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="<?php echo $Pinstagram; ?>" target="_blank">
                                    <i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="<?php echo $Plinkedin; ?>" target="_blank">
                                    <i class="fa fa-linkedin"></i></a>
                            </div>
                           
                            <div class="social-icon">
                                <a href="<?php echo $Ptwitter; ?>" target="_blank">
                                    <i class="fa fa-twitter"></i></a>
                            </div>
                                <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index.php">
                                <img src="<?php $Plogo = substr($Plogo, 3); echo $Plogo; ?>" >
                            </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item"><a href="index.php" aria-current="page">Home</a></li>
                                <li class="menu-item"><a href="about-1.php">About Us</a></li>
                                <li class="menu-item"><a href="service.php">What We Do</a></li>
                                <li class="menu-item"><a href="portfolio-grid-1-column.php">Events</a></li>
                                <li class="menu-item"><a href="gallery-2-columns-without-caption.php">Gallery</a></li>
                                <li class="menu-item"><a href="blog-full-with-right-sidebar.php">Blog</a></li>
                                <li class="menu-item"><a href="contact-page.php">Contact Us</a></li>
                                <li class="menu-item"><a  class="greennature-donate-button greennature-lb-payment">Shop</a></li>
       
                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home  <?php if($pagename=='home'){
                                    echo "current-menu-item";
                                } ?>  greennature-normal-menu"><a href="index.php">Home</a></li>
                                <li class="menu-item   <?php if($pagename=='about'){
                                    echo "current-menu-item";
                                }?> " ><a href="about-1.php">About Us </a></li>
                                <li class="menu-item   <?php if($pagename=='service'){
                                    echo "current-menu-item";
                                } ?> "><a href="service.php">What We Do</a></li>
                                <li class="menu-item   <?php if($pagename=='events'){
                                    echo "current-menu-item";
                                }?> "><a href="portfolio-grid-1-column.php">Events</a></li>
                                <li class="menu-item   <?php if($pagename=='gallery'){
                                    echo "current-menu-item";
                                }?> "><a href="gallery-2-columns-without-caption.php">Gallery</a></li>
                                <li class="menu-item   <?php if($pagename=='blog'){
                                    echo "current-menu-item";
                                }?> "><a href="blog-full-with-right-sidebar.php">Blog</a></li>
                                <li class="menu-item   <?php if($pagename=='contact'){
                                    echo "current-menu-item";
                                }?> "><a href="contact-page.php">Contact Us</a></li>
                                
                            </ul>
                            <a class="greennature-donate-button greennature-lb-payment"><span class="greennature-button-overlay"></span><span class="greennature-button-donate-text">Shop</span></a>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>