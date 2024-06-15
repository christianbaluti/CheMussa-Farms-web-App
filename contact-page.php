<?php
$pagename = 'contact';
require 'navbar.php';
include 'backend/profile.read.php';
?>
<!-- is search -->
<div class="content-wrapper">
    <div class="greennature-content">

        <!-- Above Sidebar Section-->
        <div class="above-sidebar-wrapper">
            <div class="with-sidebar-wrapper">
                <section id="content-section-1">
                    <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0" style="background-image: url('<?php echo $Pcontact_image; ?>'); padding-top: 260px; padding-bottom: 140px;">
                        <div class="container">
                            <div class="greennature-title-item">
                                <div class="greennature-item-title-wrapper greennature-item  greennature-center greennature-extra-large ">
                                    <div class="greennature-item-title-container container">
                                        <div class="greennature-item-title-head">
                                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">Get in Touch with Us</h3>
                                            <div class="greennature-item-title-caption greennature-skin-info">We are more than happy to get to know you</div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>

        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left eight columns">
                    <div class="with-sidebar-content twelve columns">
                        <section id="content-section-2">
                            <div class="section-container container">
                                <div class="greennature-item greennature-content-item" style="margin-bottom: 60px;"><span class="clear"></span><span class="greennature-space" style="margin-top: -22px; display: block;"></span>
                                    <h5 class="greennature-heading-shortcode" style="font-weight: bold;">Please fulfill the form below.</h5>
                                    <p> <span class="clear"></span><span class="greennature-space" style="margin-top: 25px; display: block;"></span>
                                        <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                            <form class="quform" id="contact-form"  method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*" required>
                                                            </span> 
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="email" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*" required>
                                                            </span> 
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*" required></textarea>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button"><span>Send</span></button>
                                                            </div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </section>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="greennature-sidebar greennature-right-sidebar four columns">
                    <div class="greennature-item-start-content sidebar-right-item">
                        <div id="text-7" class="widget widget_text greennature-item greennature-widget">
                            <h3 class="greennature-widget-title">Contact Information</h3>
                            <div class="clear"></div>
                            <div class="textwidget">
                                <p><?php echo $Paddress; ?></p>
                                <p><i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #444444; font-size: 16px;"></i> <?php echo $Pphone1; ?> | <?php echo $Pphone2; ?></p>
                                <p><i class="greennature-icon fa fa-envelope" style="vertical-align: middle; color: #444444; font-size: 16px;"></i><?php echo $Pemail; ?></p>
                                <!--<p><i class="greennature-icon fa fa-clock-o" style="vertical-align: middle; color: #444444; font-size: 16px;"></i> Everyday 9:00-17:00</p>-->
                            </div>
                        </div>
                        <div id="text-8" class="widget widget_text greennature-item greennature-widget">
                            <h3 class="greennature-widget-title">Social Media</h3>
                            <div class="clear"></div>
                            <div class="textwidget">
                                <a href="<?php echo $Pfacebook; ?>"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle; color: #444444; font-size: 28px;"></i></a>
                                <a href="<?php echo $Ptwitter; ?>"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle; color: #444444; font-size: 28px;"></i></a>
                                <a href="<?php echo $Pinstagram; ?>"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle; color: #444444; font-size: 28px;"></i></a>
                                <a href="<?php echo $Plinkedin; ?>"><i class="greennature-icon fa fa-linkedin" style="vertical-align: middle; color: #444444; font-size: 28px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Below Sidebar Section-->
        <div class="below-sidebar-wrapper">
            <section id="content-section-3">
                <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all no-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0.2" style="background-image: url('images/contact/contact.jpg'); padding-top: 100px; padding-bottom: 50px;">
                    <div class="container">
                        <div class="four columns">
                            <div class="greennature-box-with-icon-ux greennature-ux">
                                <div class="greennature-item greennature-box-with-icon-item pos-top type-circle">
                                    <div class="box-with-circle-icon" style="background-color: #5dc269"><i class="fa fa-envelope" style="color:#ffffff;"></i>
                                        <br>
                                    </div>
                                    <h4 class="box-with-icon-title">Contact By Email</h4>
                                    <div class="clear"></div>
                                    <div class="box-with-icon-caption">
                                        <p> Feel free to send us an email anytime, and we'll make every effort to respond as soon as possible.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="four columns">
                            <div class="greennature-box-with-icon-ux greennature-ux">
                                <div class="greennature-item greennature-box-with-icon-item pos-top type-circle">
                                    <div class="box-with-circle-icon" style="background-color: #5dc269"><i class="fa fa-phone" style="color:#ffffff;"></i>
                                        <br>
                                    </div>
                                    <h4 class="box-with-icon-title">Contact By Phone</h4>
                                    <div class="clear"></div>
                                    <div class="box-with-icon-caption">
                                        <p>We are more than happy to pick up your calls within the week between 8 am to 4:30 pm CAT.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="four columns">
                            <div class="greennature-box-with-icon-ux greennature-ux">
                                <div class="greennature-item greennature-box-with-icon-item pos-top type-circle">
                                    <div class="box-with-circle-icon" style="background-color: #5dc269"><i class="fa fa-home" style="color:#ffffff;"></i>
                                        <br>
                                    </div>
                                    <h4 class="box-with-icon-title">Come To See Us</h4>
                                    <div class="clear"></div>
                                    <div class="box-with-icon-caption">
                                        <p>You are always free to visit and have a great experience between 8 am to 6 pm CAT any day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
        </div>

    </div>
    <!-- greennature-content -->
    <div class="clear"></div>
</div>
<!-- content wrapper -->

<?php
require 'footer.php';
?>

<script>
function validateForm() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    if (name === "" || email === "" || message === "") {
        alert("All fields must be filled out");
        return false;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    return true;
}
</script>
