<?php
    $pagename = 'about';
    require 'navbar.php';
    include 'backend/about.read.php';
    include 'backend/about.about.read.php';
    include 'backend/profile.read.php';
?>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" 
                        id="greennature-parallax-wrapper-1" data-bgspeed="0" style="background-image: url(' <?php echo $Pabout_image; ?> '); padding-top: 260px; padding-bottom: 140px; ">
                            <div class="container">
                                <div class="greennature-title-item">
                                    <div class="greennature-item-title-wrapper greennature-item  greennature-center greennature-extra-large ">
                                        <div class="greennature-item-title-container container">
                                            <div class="greennature-item-title-head">
                                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">STORY ABOUT US</h3>
                                                <div class="greennature-item-title-caption greennature-skin-info"> <?php echo $sentence1; ?> </div>
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
                    </section> <br> <br> <br> <!-- add a break height here -->
                    <section id="content-section-2">
                        <div class="greennature-color-wrapper  gdlr-show-all no-skin greennature-half-bg-wrapper" style="background-color: #ffffff; ">
                            <div class="greennature-half-bg greennature-bg-solid" style="background-image: url(<?php echo $main_image; ?>);"></div>
                            <div class="container">
                                <div class="six columns"></div>
                                <div class="six columns">
                                    <div class="greennature-item greennature-about-us-item greennature-normal">
                                        <div class="about-us-title-wrapper">
                                            <h3 class="about-us-title"><?php echo $title; ?></h3>
                                            <div class="about-us-caption greennature-title-font greennature-skin-info"><?php echo $subtitle; ?></div>
                                            <div class="about-us-title-divider"></div>
                                        </div>
                                        <div class="about-us-content-wrapper">
                                            <div class="about-us-content greennature-skin-content">
                                                <p><?php echo $main_text; ?></p>
                                            
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-3">
                        <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #f0f0f0; padding-top: 70px; padding-bottom: 25px; ">
                            <div class="container">
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-1-caption">
                                            <div class="column-service-image"><img src="upload/icon-6.png" alt="" width="80" height="80" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title"><?php echo $statement11; ?></h3>
                                                <div class="column-service-caption greennature-skin-info"><?php echo $italized_text1; ?></div>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p><?php echo $paragraph1; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-1-caption">
                                            <div class="column-service-image"><img src="upload/icon-5.png" alt="" width="80" height="80" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title"><?php echo $statement12; ?></h3>
                                                <div class="column-service-caption greennature-skin-info"><?php echo $italized_text2; ?></div>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p><?php echo $paragraph2; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-1-caption">
                                            <div class="column-service-image"><img src="upload/icon-7.png" alt="" width="80" height="80" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title"><?php echo $statement13; ?></h3>
                                                <div class="column-service-caption greennature-skin-info"><?php echo $italized_text3; ?></div>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p><?php echo $paragraph3; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-4">
                        <iframe src="team.php" style="height: 380px; width: 100%;"></iframe>
                    </section>
                    <section id="content-section-5">
                        <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-service-half greennature-half-bg-wrapper" style="background-color: #f5f5f5; padding-bottom: 20px; ">
                            <div class="greennature-half-bg greennature-bg-solid" style="background-image: url(<?php echo $Pmission_vission_moto_image; ?>);"></div>
                            <div class="container">
                                <div class="six columns">
                                    <div class="greennature-item greennature-content-item"></div>
                                </div>
                                <div class="six columns">
                                    <div class="greennature-item greennature-icon-with-list-item">
                                        <div class="list-with-icon-ux greennature-ux">
                                            <div class="list-with-icon greennature-left">
                                                <div class="list-with-icon-image"><img src="upload/icon-2.png" alt="" width="80" height="80" /></div>
                                                <div class="list-with-icon-content">
                                                    <div class="list-with-icon-title greennature-skin-title">Our Mission</div>
                                                    <div class="list-with-icon-caption">
                                                        <p><?php echo $Pmission; ?></p>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon-ux greennature-ux">
                                            <div class="list-with-icon greennature-left">
                                                <div class="list-with-icon-image"><img src="upload/icon-2.png" alt="" width="80" height="80" /></div>
                                                <div class="list-with-icon-content">
                                                    <div class="list-with-icon-title greennature-skin-title">Our Vision</div>
                                                    <div class="list-with-icon-caption">
                                                        <p><?php echo $Pvision; ?></p>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon-ux greennature-ux">
                                            <div class="list-with-icon greennature-left">
                                               <div class="list-with-icon-image"><img src="upload/icon-2.png" alt="" width="80" height="80" /></div>
                                                <div class="list-with-icon-content">
                                                    <div class="list-with-icon-title greennature-skin-title">Our Motto</div>
                                                    <div class="list-with-icon-caption">
                                                        <p><?php echo $Pmotto; ?></p>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
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