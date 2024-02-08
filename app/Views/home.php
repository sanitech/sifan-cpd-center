<?php
include_once 'include/header.php';
?>

<!-- navbar start -->
<?php
include_once 'include/navbar.php';
?>
<!-- navbar end -->



<!-- hero-section start -->
<section class="dark:bg-gray-800 dark:text-gray-100 linear-bg" id="hero">
    <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
        <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
            <h1 class="text-5xl font-bold leadi sm:text-6xl">
                Unlock Your <span class="dark:text-violet-400">Potential</span> With CPD
            </h1>
            </h1>
            <p class="mt-6 mb-8 text-lg sm:mb-12">To produce preferred and qualified health professionals and provide new and up-to-date training
                <!-- <br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem -->
            </p>
            <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                <a href="#category"><button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-dark dark:bg-violet-900 rounded-lg hover:opacity-0.9 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Explore our courses
                    </button>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            <img src="assets/images/sefian cpd_.png" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
        </div>
    </div>
</section>
<!-- hero-section end -->



<!-- course-section start -->
<section class="course-section" id="category">

    <div class="header-section">
        <div class="header-text">
            <div class="line-decorate">
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <h1>course</h1>
            <div class="line-decorate right-line">
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <p class="header-footer-text">Upskill your future. Dive into Sifan's top courses, online, in-person, or blended.</p>
        <p class="header-footer-text">Discover the vibrant learning environment at our CPD Center.</p>
    </div>


    <div class="top-course-container">
        <?php
        foreach ($category as $category) :
            $id = $category['cat_id'];
            $categoryTitle = $category['category'];
        ?>
            <a href="<?php echo base_url("category/$id") ?>" class="top-course-category">
                <img src="<?php echo base_url('/uploads') . '/' . $category['thumbnail'] ?>" alt="" class="category-thu" />
                <div class="top-course-text-container">
                    <div class="top-course-title"><?php echo $categoryTitle ?></div>
                    <div class="top-course-description">
                    </div>
                </div>
            </a>

        <?php

        endforeach;
        ?>
    </div>
</section>
<!-- course-section end -->



<!-- details-section start -->
<section class="detail-container" id="details">
    <div class="home-details">
        <div class="home-details1">
            <div class="home-container02">
                <span class="home-text sectionTitle">
                    <span>Details</span>
                    <br />
                </span>
                <h2 class="home-details-heading heading2">
                    Why Choose i working CPD Center?
                </h2>
                <span class="home-details-sub-heading">
                    i working CPD Center is dedicated to providing high-quality
                    professional development courses that are designed to meet the needs
                    of working professionals. With a team of experienced instructors and
                    a comprehensive curriculum, we offer courses in various fields to
                    help you stay ahead in your industry. Join us today and take the
                    next step towards achieving your career goals.
                </span>
            </div>
            <img alt="image" src="https://images.unsplash.com/photo-1467318339494-a32c2ada54d4?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwNDA4NDcxOXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=400" class="home-details-image" />
        </div>
    </div>
</section>
<!-- details-section end -->




<!-- about-section start -->
<section class="about-cont" id="abouts">
    <div class="header-section">
        <div class="header-text">
            <div class="line-decorate">
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <h1>About us</h1>
            <div class="line-decorate right-line">
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="about-header">

        <section class="about-hero-container" id="aboutCard">
            <div class="about-us-hero-container">
                <h3>How it Started</h3>
                <h1 class="about-hero-motto">
                    Our Dream is Global Learning Transformation
                </h1>
                <p>we're dedicated to fostering excellence in healthcare by providing accessible and relevant continuous professional development (CPD) programs. We believe that every healthcare professional deserves the opportunity to expand their
                    knowledge and skills, ultimately leading to improved patient care across Ethiopia. <br>
Our diverse range of high-quality CPD programs caters specifically to the needs of doctors, nurses, pharmacists, and other healthcare workers. Whether you're seeking to stay current on industry best practices, deepen your expertise in a specific area, or explore emerging advancements, we have the right program for you.</p>

            </div>

            <!-- <div class="about-us-hero"> -->
            <div class="hero-images-section">
                <img src="../assets/images/cpd.png" alt="" loading="lazy">
            </div>

            <!-- 
                <div class="project-container">
                <div class="project-card">
                    <span class="point">3.5</span>
                    <span class="desc">Lorem, ipsum dolor.</span>
                </div>
                <div class="project-card">
                    <span class="point">3.5</span>
                    <span class="desc">Lorem, ipsum dolor.</span>
                </div>
                <div class="project-card">
                    <span class="point">3.5</span>
                    <span class="desc">Lorem, ipsum dolor.</span>
                </div>
                <div class="project-card">
                    <span class="point">3.5</span>
                    <span class="desc">Lorem, ipsum dolor.</span>
                </div>
            </div> -->
            <!-- </div> -->
        </section>

    </div>
</section>
<!-- about-section end -->



<!-- service-section start -->
<?php
include 'include/services.php';

?>
<!-- service-section end -->




<?php

if (!empty($team)) : ?>

    <!-- team section start -->
    <section class="py-10 after-linear" id="teams">
        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="mb-16 text-center">

                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl dark:text-white">Teams</h2>
                <p class="text-gray-600 lg:w-8/12 lg:mx-auto dark:text-white">Your Success is Our Priority.</p>
            </div>
            <div class="grid gap-12 items-center md:grid-cols-3 ">
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64 bg-gray-200 dark:bg-indigo-400" src="assets/images/team1.png" alt="woman" loading="lazy" width="640" height="805">
                    <div>
                        <h4 class="text-2xl">Dr Rahel Mekonon</h4>
                        <span class="block text-sm text-gray-500 dark:text-gray-600">Instructor</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" src="assets/images/sifan cpd co founder.png" alt="man" loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Yetinayet Bogale(HO)</h4>
                        <span class="block text-sm text-gray-500 dark:text-gray-600">Co-funder</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 bg-gray-200  lg:h-64" src="assets/images/team2.png" alt="woman" loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Dr Hiwet W/maryame</h4>
                        <span class="block text-sm text-gray-500 dark:text-gray-600">Instructor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section end -->









<!-- event section start -->
<?php
endif;
if (!empty($event)) : ?>
    <section class="event-section after-linear" id="events">

        <div class="header-section" id="event">
            <div class="header-text">
                <div class="line-decorate">
                    <span class="line"></span>
                    <span class="line"></span>
                </div>

                <h1>Event</h1>
                <div class="line-decorate right-line">
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
            <p class="header-footer-text">Dive deeper, connect closer, learn smarter. Choose your learning format.</p>
        </div>

        <div class="event-container">

            <?php

            foreach ($event as $event) { ?>

                <div class="event-card">
                    <div class="event-thumbnail">
                        <img src="<?php echo base_url('/uploads') . '/' . $event['thumbnail'] ?>" alt="<?php echo $event['event'] ?>" loading="lazy" class="category-thu" />

                    </div>

                    <div class="event-card-info">
                        <h3 class="event-title"><?php echo $event['event'] ?>.</h3>
                        <div class="event-info-content">
                            <div class="event-info">
                                <i class="bi bi-calendar3"></i> <span><?php echo $event['date'] ?></span>
                            </div>
                            <div class="event-info">
                                <i class="bi bi-clock"></i> <span><?php echo $event['start'] ?> - <?php echo $event['end'] ?></span>
                            </div>
                            <div class="event-info">
                                <i class="bi bi-geo-alt"></i> <span><?php echo $event['place'] ?></span>
                            </div>
                        </div>
                        <div class="event-more-btn"></div>
                    </div>
                </div>
            <?php
            }

            ?>


        </div>
    </section>
<?php
endif;
?>
<!-- event section end -->



<!-- contact section start -->
<?php
include_once 'include/contact.php';
?>
<!-- contact section end -->


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