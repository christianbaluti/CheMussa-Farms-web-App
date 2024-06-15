
<?php include 'backend/profile.read.php'; ?>
        <!-- content wrapper -->
<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                <div class="textwidget">
                    <p><img src="images/logo2.png" style="width: 80px; margin: 0px; padding: 0px;"  alt="" /></p>
                    <p style="text-align: justify;"><?php echo $Pshort_about; ?></p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Contact Info</h3>
                <div class="clear"></div>
                <div class="textwidget">
                    <span class="clear"></span>
                    <span class="greennature-space" style="margin-top: -6px; display: block;"></span>
                    <?php echo $Paddress; ?>

                    <span class="clear"></span>
                    <span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> <?php echo $Pphone1; ?>

                    <span class="clear"></span>
                    <span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i> <?php echo $Pphone2; ?>

                    <span class="clear"></span>
                    <span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> <?php echo $Pemail; ?>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-3">
                    <div id="gdlr-recent-post-widget-5" class="widget widget_gdlr-recent-post-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Recent Blogs</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-post-widget">
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#"><img src="images/blog/blog-mini-1.jpg" alt="" width="150" height="150" /></a>
                                </div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a href="blog-details.php?blog_id=1">Modern Farming Methods</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="blog-details.php?blog_id=1">9 April 2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-4">
                    <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Gallery</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-port2-widget">
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="images/gallery/gallery-mini-1.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="images/gallery/gallery-mini-2.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
        <div class="clear"></div>
    </div>

    <div class="copyright-wrapper">
        <div class="copyright-container container">
            <div class="copyright-left">
                <a href="#"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                <a href="#"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                <a href="#"><i class="greennature-icon fa fa-linkedin" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
            </div>
            <div class="copyright-right">
                <a target="_blank" href="https://www.dreamcodemw.com">Dream Code</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>



        <div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>
        <div class="greennature-payment-lightbox-container" id="greennature-payment-lightbox-container">
            <div class="greennature-payment-lightbox-inner">
                <form class="greennature-payment-form" id="greennature-payment-form" >
                    <h3 class="greennature-payment-lightbox-title">
				<span class="greennature-tail">Tell us what you want and we will deliver.</span>
			</h3>

                   
                   <div class="greennature-form-fields">
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">First Name *</span>
                                <input class="greennature-require" type="text" name="name">
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Last Name *</span>
                                <input class="greennature-require" type="text" name="last-name">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Email *</span>
                                <input class="greennature-require greennature-email" type="text" name="email">
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Phone</span>
                                <input type="text" name="phone">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">What products or services do you want from us?</span>
                                <textarea name="additional-note"></textarea>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="greennature-message"></div>
                    <div class="greennature-loading">Loading...</div>
                    <input type="submit" value="Submit Now" />
                </form>
            </div>
        </div>
    </div>
    <!-- body-wrapper -->
    <script type='text/javascript' src='./backend/write.contact.js'></script>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script>
        var ms_grabbing_curosr = 'plugins/masterslider/public/assets/css/common/grabbing.php',
            ms_grab_curosr = 'plugins/masterslider/public/assets/css/common/grab.php';
    </script>
    <script type='text/javascript' src='plugins/superfish/js/superfish.js'></script>
    <script type='text/javascript' src='js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='plugins/dl-menu/modernizr.custom.js'></script>
    <script type='text/javascript' src='plugins/dl-menu/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='plugins/flexslider/jquery.flexslider.js'></script>
    <script type='text/javascript' src='plugins/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='plugins/masterslider/public/assets/js/masterslider.min.js'></script>
    <script type='text/javascript' src='plugins/jquery.transit.min.js'></script>
    <script type='text/javascript' src='plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>




    <script>
    (function ( $ ) {
        "use strict";

        $(function () {
            var masterslider_d1da = new MasterSlider();

            // slider controls
			masterslider_d1da.control('arrows'     ,{ autohide:true, overVideo:true  });
			masterslider_d1da.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom', space:6 , margin:25  });
            // slider setup
            masterslider_d1da.setup("slider_1", {
				width           : 1140,
				height          : 800,
				minHeight       : 0,
				space           : 0,
				start           : 1,
				grabCursor      : false,
				swipe           : true,
				mouse           : false,
				keyboard        : true,
				layout          : "fullwidth",
				wheel           : false,
				autoplay        : false,
                instantStartLayers:false,
				mobileBGVideo:false,
				loop            : true,
				shuffle         : false,
				preload         : 0,
				heightLimit     : true,
				autoHeight      : false,
				smoothHeight    : true,
				endPause        : false,
				overPause       : true,
				fillMode        : "fill",
				centerControls  : true,
				startOnAppear   : false,
				layersMode      : "center",
				autofillTarget  : "",
				hideLayers      : false,
				fullscreenMargin: 0,
				speed           : 20,
				dir             : "h",
				parallaxMode    : 'swipe',
				view            : "basic"
            });
            

            
            $("head").append( "<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />" );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
         });
        
    })(jQuery);
    </script> 
</body>

<!-- index19:10 GMT -->
</html>