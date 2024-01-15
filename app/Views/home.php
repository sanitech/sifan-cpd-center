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


<!-- hero-section-start -->

<!-- <header class="heros" id="home">
    <div class="hero-text">
        <h1>Take Charge of Your Future.
            Unlock Your <span>Potential</span> With CPD</h1>
        <p>To produce preferred and qualified health professionals and provide new and up-to-date training</p>
        <a href="#course"> <button class="call-us-btn">Explore our courses</button></a>
    </div>

    <div class="hero-images">
        <img src="assets/images/sefian cpd_.png" alt="" srcset="assets/images/sefian cpd_w768.png 1024w, assets/images/sefian cpd_w1024.png 768w " sizes="(max-width: 1024px) 768px,
         550px">

    </div>
</header>
hero-section-start -->



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

<!-- 
<section class="flexible-course-section">

    <div class="header-section">
        <div class="header-text">
            <div class="line-decorate">
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <h1>learn with</h1>
            <div class="line-decorate right-line">
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <p class="header-footer-text">Dive deeper, connect closer, learn smarter. Choose your learning format.</p>
    </div>


    <div class="offering-course-container">
        <div class="offering-course-category">
            <img src="" alt="">
            <div class="top-course-text-container">
                <h3 class="offering-course-title">Online</h3>
                <div class="top-course-description">
                    Our online courses empower you to
                    upskill at your own pace, fitting
                    seamlessly into your busy schedule.
                    Learn from expert instructors, access
                    resources on demand, and enjoy the
                    convenience of self-paced modules.
                </div>
            </div>
        </div>
        <div class="offering-course-category">
            <img src="" alt="">
            <div class="top-course-text-container">
                <h3 class="offering-course-title">In-Person</h3>
                <div class="top-course-description">
                    Connect with fellow learners and
                    industry experts in our vibrant
                    in-person classrooms. Experience
                    interactive workshops, engaging
                    discussions, and personalized
                    for hands-on learning that takes your
                </div>
            </div>
        </div>
        <div class="offering-course-category">
            <img src="" alt="">
            <div class="top-course-text-container">
                <h3 class="offering-course-title">Blended</h3>
                <div class="top-course-description">
                    Maximize your learning with our
                    blended formats that combine the
                    flexibility of online modules with the
                    dynamic energy of in-person sessions
                    Enjoy personalized support,
                </div>
            </div>
        </div>


    </div>
</section> -->

<!-- 
<section class="course-section" id="about">

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
        <p class="header-footer-text">Upskill your future. Dive into Sifan's top courses, online, in-person, or blended.</p>
    </div>

    <div class="about-us-container">

        <div class="about-us-text">
            <h1>About sifan CDP center</h1>
            <p>Embark on a journey of continuous professional development with Sifan CPD Center. Explore our diverse range of courses designed to ignite your </p>
        </div>

        <div class="about-us-image">
            <img src="assets/images/contact.jpg" alt="">
        </div>
    </div>


</section> -->



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
                <p>SIFAN CPD Center is your one-stop shop for continuous professional development (CPD) in
                    Ethiopia. We believe that healthcare professionals
                    deserve the best possible education and training to deliver the highest
                    quality care to their patients. That's why we offer a wide range of high-quality,
                    accessible, and relevant CPD programs tailored to the needs of doctors, nurses,
                    pharmacists, and other healthcare workers.</p>

            </div>

            <!-- <div class="about-us-hero"> -->
            <div class="hero-images-section">
                <img src="../assets/images/cpd.png" alt="" loading="lazy">
            </div>

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
            </div>
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




<!-- <section class="future">
    <div class="home-features">
        <div class="home-features-container">
            <div class="home-features1">
                <div class="home-container03">
                    <span class="home-text03 sectionTitle font20">
                        <span>features</span>
                        <br />
                    </span>
                    <h2 class="home-features-heading heading2">
                        Unlock Your Potential with Our CPD Center
                    </h2>
                    <span class="home-features-sub-heading ">
                        Discover the key features that make our CPD Center the perfect
                        place for your professional development.
                    </span>
                </div>
                <div class="home-container04">
                    <div class="feature-card-feature-card">
                        <svg viewBox="0 0 1024 1024" class="feature-card-icon">
                            <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                        </svg>
                        <h3 class="feature-card-text heading3">
                            <span>Flexible Course Options</span>
                        </h3>
                        <span class="feature-card-text1">
                            <span>
                                Choose from a wide range of courses that fit your
                                schedule and interests.
                            </span>
                        </span>

                    </div>
                    <div class="feature-card-feature-card">
                        <svg viewBox="0 0 1024 1024" class="feature-card-icon">
                            <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                        </svg>
                        <h3 class="feature-card-text heading3">
                            <span>Expert Instructors</span>
                        </h3>
                        <span class="feature-card-text1">
                            <span>
                                Learn from experienced professionals in the field who
                                are passionate about teaching.
                            </span>
                        </span>
                    </div>
                    <div class="feature-card-feature-card">
                        <svg viewBox="0 0 1024 1024" class="feature-card-icon">
                            <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                        </svg>
                        <h3 class="feature-card-text heading3">
                            <span>Interactive Learning</span>
                        </h3>
                        <span class="feature-card-text1">
                            <span>
                                Engage in interactive activities and discussions to
                                enhance your learning experience.
                            </span>
                        </span>
                    </div>
                    <div class="feature-card-feature-card">
                        <svg viewBox="0 0 1024 1024" class="feature-card-icon">
                            <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                        </svg>
                        <h3 class="feature-card-text heading3">
                            <span>Career Development Support</span>
                        </h3>
                        <span class="feature-card-text1">
                            <span>
                                Receive guidance and resources to help you advance in
                                your career after completing a course.
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->









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
                        <span class="block text-sm text-gray-500 dark:text-white">Instructor</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" src="https://tailus.io/sources/blocks/classic/preview/images/man.jpg" alt="man" loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Jonathan Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Technical Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 bg-gray-200  lg:h-64" src="assets/images/team2.png" alt="woman" loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Dr Hiwet W/maryame</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
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