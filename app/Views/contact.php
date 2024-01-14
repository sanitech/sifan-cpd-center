<?php
include_once 'include/header.php';
?>

<!-- seo-info start -->

<!-- seo-info end -->


<!-- navbar start -->
<?php
include_once 'include/navbar.php';
?>
<!-- navbar end -->



<!-- main section start -->
<section class="bg-white dark:bg-gray-900">
    <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="place-self-center mr-auto lg:col-span-7">
            <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
            <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Speak to Sales
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>
    </div>
</section>

<?php
include_once 'include/contact.php';
?>

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