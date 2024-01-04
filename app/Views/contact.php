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
                        etinayet.bg@gmail.com
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
                        <span>+251-913-76492</span>
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
        <div class="gmap_canvas" style="width: 100%;"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=2880 Broadway, New York&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">google maps code generator</a></div>
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



<!-- footer start -->
<?php
include_once 'include/footer.php';
?>
<!-- footer end -->