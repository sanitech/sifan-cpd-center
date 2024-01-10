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

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
</script>


<!-- hero-section start -->
<section class="dark:bg-gray-800 dark:text-gray-100 linear-bg">
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
                <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:bg-violet-400 dark:text-gray-900">Suspendisse</a>
                <a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-100"></a>
            </div>
        </div>
        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            <img src="assets/images/sefian cpd_.png" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
        </div>
    </div>
</section>
<!-- hero-section end -->


<!-- course-section start -->
<section class="course-section" id="course">

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
                    <div class="top-course-title leadi"><?php echo $categoryTitle ?></div>
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
<section class="detail-container">
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
<section class="about-cont" id="about">

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
    <div class="about-header">

        <div class="about-hero-container">
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
        </div>

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
    <div class="py-10dark:bg-gray-800 dark:text-gray-100 after-linear">
        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="mb-16 text-center">

                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Teams</h2>
                <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Your Success is Our Priority.</p>
            </div>
            <div class="grid gap-12 items-center md:grid-cols-3">
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" src="https://tailus.io/sources/blocks/classic/preview/images/woman1.jpg" alt="woman" loading="lazy" width="640" height="805">
                    <div>
                        <h4 class="text-2xl">Hentoni Doe</h4>
                        <span class="block text-sm text-gray-500">CEO-Founder</span>
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
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" src="https://tailus.io/sources/blocks/classic/preview/images/woman.jpg" alt="woman" loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team section end -->









    <!-- event section start -->

<?php
endif;



if (!empty($event)) : ?>
    <section class="event-section after-linear">

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



<section class="bg-white dark:bg-gray-900 linear-bg">
    <div class="container px-6 py-12 mx-auto">
        <div class="lg:flex lg:items-center lg:-mx-6">
            <div class="lg:w-1/2 lg:mx-6">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize dark:text-white lg:text-3xl">
                    Contact us for <br> more info
                </h1>

                <div class="mt-6 space-y-8 md:mt-8">
                    <p class="flex items-start -mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">
                            Mojo around Debora Mercume Hotel
                        </span>
                    </p>

                    <p class="flex items-start -mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>

                        <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">(251) 913-76492</span>
                    </p>

                    <p class="flex items-start -mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="mx-2 text-gray-700 truncate w-72 dark:text-gray-400">yetinayet.bg@gmail.com</span>
                    </p>
                </div>

                <div class="mt-6 w-80 md:mt-8">
                    <h3 class="text-gray-600 dark:text-gray-300 ">Follow us</h3>

                    <div class="flex mt-4 -mx-1.5 ">
                        <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500" href="#">
                            <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z" />
                            </svg>
                        </a>

                        <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500" href="#">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z" fill="currentColor" />
                                <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                                <path d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z" fill="currentColor" />
                            </svg>
                        </a>

                        <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500" href="#">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z" fill="currentColor" />
                            </svg>
                        </a>

                        <a class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500" href="#">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 lg:w-1/2 lg:mx-6">
                <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-900 lg:max-w-xl shadow-gray-300/50 dark:shadow-black/50">
                    <h1 class="text-lg font-medium text-gray-700">What do you want to ask</h1>

                    <form class="mt-6">
                        <div class="flex-1">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                            <input type="text" placeholder=" name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="flex-1 mt-6">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                            <input type="email" placeholder="abc@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="w-full mt-6">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                            <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                        </div>

                        <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            get in touch
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


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