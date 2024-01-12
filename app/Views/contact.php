<?php
include_once 'include/header.php';
?>

<!-- seo-info start -->
<?php
include_once 'include/seoHeader.php';
?>
<!-- seo-info end -->


<!-- navbar start -->
<?php
include_once 'include/navbar.php';
?>
<!-- navbar end -->



<!-- main section start -->

<header class="contact-header">

    <div class="contact-container-header">
        <h1 class="contact-header-text">Contact us</h1>
        <p>Lorem ipsum dolor sit amet.</p>
        <!-- <img class="contact-banner" src="assets/images/contact.jpg" alt=""> -->
    </div>
</header>

<section class="contact-container-form">

    <div class="con-container">

        <div class="contact-address">
            <h2>Get in touch</h2>
            <ul>
                <li>
                    <div class="icon-container">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="contact-infos">
                        Office address
                    </div>
                    <div class="contact-detail">
                        Mojo around Debora Mercume Hotel
                    </div>
                </li>
                <li>
                    <div class="icon-container">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="contact-infos">
                        Email
                    </div>
                    <div class="contact-detail">
                        yetinayet.bg@gmail.com
                    </div>
                </li>
                <li>
                    <div class="icon-container">
                        <i class="bi bi-phone"></i>
                    </div>
                    <div class="contact-infos">
                        phone
                    </div>
                    <div class="contact-detail">
                        <span>+251-913-76492</span> <br>
                        <span>+251-913-76492</span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="contact-form-container">
            <form action="">

                <div class="drop">Drop us line</div>

                <div class="contact-form-control">
                    <input type="text" name="" id="" placeholder="Your Name">
                </div>


                <div class="contact-form-control">
                    <input type="text" name="" id="" placeholder="Your Email">
                </div>

                <div class="contact-form-control">
                    <input type="text" name="" id="" placeholder="Contact us Number">
                </div>

                <div class="contact-form-control">
                    <input type="text" name="" id="" placeholder="Subject">
                </div>

                <div class="contact-form-control">
                    <textarea name="" id="" cols="10" rows="5" placeholder="Message"></textarea>
                </div>

                <button class="submit-btn">
                    <i class="bi bi-send"></i>
                    <span>Send Message</span>
                </button>
            </form>
        </div>
    </div>
</section>

<div class="map-container">
    <div class="mapouter">
        <div class="gmap_canvas" style="width: 100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d909.2108870985845!2d39.1162523!3d8.591131!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMzUnMjguMSJOIDM5wrAwNycwMC44IkU!5e1!3m2!1sen!2set!4v1704607567015!5m2!1sen!2set" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a href="https://embed-googlemap.com">google maps code generator</a></div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                width: 100%;
                height: 400px;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: inherit;
                height: 400px;
            }

            .gmap_iframe {
                width: 100% !important;
                height: 400px !important;
            }
        </style>
    </div>
</div>




<!-- main section end -->

<!-- faq-section start -->
<?php
include_once 'include/faq.php';
?>
<!-- faq-section end -->


<!-- footer start -->
<?php
include_once 'include/footer.php';
?>
<!-- footer end -->