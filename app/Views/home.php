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

<header class="hero" id="home">
    <div class="hero-text">
        <h1>Take Charge of Your Future.
            Unlock Your <span>Potential</span> With CPD</h1>
        <p>Explore a diverse range of courses in online, in-person,
            and blended formats</p>
        <a href="#course"> <button class="call-us-btn">Explore our courses</button></a>
    </div>

    <div class="hero-images">
        <img src="assets/images/sefian cpd_.png" alt="" srcset="assets/images/sefian cpd_w768.png 1024w, assets/images/sefian cpd_w1024.png 768w " sizes="(max-width: 1024px) 768px,
         550px">

    </div>
</header>
<!-- hero-section-start -->



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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos ratione delectus fuga accusantium laborum consequatur porro a quis doloribus eligendi iste quae excepturi vel, similique totam consectetur autem tempora quia corporis minima quaerat. Praesentium dignissimos aliquid dolor ratione corporis, beatae laboriosam placeat. Molestias quibusdam voluptatibus nisi quod incidunt a saepe magnam dolorum voluptatem et. Ipsam voluptates dolorem a, non odit doloremque, voluptatem ratione, natus praesentium tempora aliquid quisquam harum ea assumenda! Eos voluptatum fugit eveniet voluptas modi vel nobis totam iure facere, beatae sequi officiis, repellendus, sunt architecto ipsam laudantium iste voluptatem praesentium exercitationem vitae ipsa et. Numquam, id modi!</p>

            </div>

            <!-- <div class="about-us-hero"> -->
            <div class="hero-images-section">
                <img src="../assets/images/contact.jpg" alt="" loading="lazy">
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


<section class="future">
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
</section>

<?php

if (!empty($team)) : ?>
    <section class="flexible-course-section">

        <div class="header-section">
            <div class="header-text">
                <div class="line-decorate">
                    <span class="line"></span>
                    <span class="line"></span>
                </div>

                <h1>Teams</h1>
                <div class="line-decorate right-line">
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
            <p class="header-footer-text">Dive deeper, connect closer, learn smarter. Choose your learning format.</p>
        </div>


        <div class="offering-course-container">
            <?php

            foreach ($team as $team) :
            ?>
                <div class="teams-members-category">
                    <img src="<?php echo base_url('/uploads') . '/' . $team['pic'] ?>" alt="<?php echo $team['name'] ?>" class="category-thu" loading="lazy" />

                    <div class="team-member-container">

                        <h3 class="team-member-name"><?php echo $team['name'] ?></h3>
                        <div class="top-course-description">
                            <?php echo $team['work'] ?>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>




        </div>
    </section>


<?php
endif;

if (!empty($event)) : ?>
    <section class="flexible-course-section">

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



<section class="contact-section" id="contact">
    <div class="header-section">
        <div class="header-text">
            <div class="line-decorate">
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <h1>Contact us</h1>
            <div class="line-decorate right-line">
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>

    <div class="contact-container">
        <div class="info-contact contact-form">
            <h2>Contact Information</h2>
            <ul>
                <li><i class="bi bi-telephone"></i>+251-113-738278</li>
                <li><i class=""></i>+251-113-738278</li>
            </ul>
            <ul>
                <li><i class="bi bi-chat-left"></i>sameimage@gmail.com</li>
                <li><i class=""></i>Mojo</li>
                <!-- <li><i class=""></i>1234, A.A, Ethiopia</li> -->
            </ul>
            <div class="circle blue-circle"></div>
            <div class="circle pink-circle"></div>
        </div>
        <div class="contact-form">
            <form action="">
                <div class="row">
                    <input class="form-control" type="text" name="" id="" placeholder="Your name" />
                    <input type="text" class="form-control" name="" id="" placeholder="Email Address" />
                </div>
                <div class="row">
                    <input class="form-control" type="text" name="" id="" placeholder="Subject" />
                </div>
                <div class="row">
                    <textarea class="form-control msg" name="" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn-send">Submit</button>
            </form>
        </div>
    </div>
</section>




<section class="faq-container">
    <div class="home-faq">
        <div class="home-faq-container">
            <div class="home-faq1">
                <div class="home-container30">
                    <span class="home-text40 sectionTitle">
                        <span>FAQ</span>
                        <br />
                    </span>
                    <h2 class="home-text43 heading2">Common questions</h2>
                    <span class="home-text44">
                        <span>
                            Here are some of the most common questions that we get.
                        </span>
                        <br />
                        <span>
                            <span>
                                <span></span>
                                <span></span>
                            </span>
                            <span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                        <span>
                            <span>
                                <span></span>
                                <span></span>
                            </span>
                            <span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="home-container31">
                    <div class="question-container">
                        <span class="question-text heading4">
                            <span>What is a CPD Center?</span>
                        </span>
                        <span class="question-text1">
                            <span>
                                A CPD Center is a professional development center that
                                offers courses and training programs to help individuals
                                enhance their skills and knowledge in their respective
                                fields.
                            </span>
                        </span>
                    </div>
                    <div class="question-container">
                        <span class="question-text heading4">
                            <span>How can I enroll in a course?</span>
                        </span>
                        <span class="question-text1">
                            <span>
                                To enroll in a course, you can visit our website and
                                navigate to the 'Courses' page. From there, you can browse
                                through the available courses and click on the 'Enroll
                                Now' button to proceed with the enrollment process.
                            </span>
                        </span>
                    </div>
                    <div class="question-container">
                        <span class="question-text heading4">
                            <span>Are the courses accredited?</span>
                        </span>
                        <span class="question-text1">
                            <span>
                                Yes, all of our courses are accredited by recognized
                                institutions and professional bodies. We ensure that our
                                courses meet the highest standards of quality and
                                relevance.
                            </span>
                        </span>
                    </div>
                    <div class="question-container">
                        <span class="question-text heading4">
                            <span>
                                Can I get a certificate upon completion of a course?
                            </span>
                        </span>
                        <span class="question-text1">
                            <span>
                                Yes, upon successful completion of a course, you will
                                receive a certificate of completion. This certificate can
                                be used to showcase your professional development and
                                enhance your career prospects.
                            </span>
                        </span>
                    </div>
                    <div class="question-container">
                        <span class="question-text heading4">
                            <span>How can I contact the CPD Center?</span>
                        </span>
                        <span class="question-text1">
                            <span>
                                You can contact us by visiting the 'Contact Us' page on
                                our website. There, you will find our contact information
                                including phone number, email address, and physical
                                address. You can reach out to us with any inquiries or
                                concerns you may have.
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- footer start -->
<?php
include_once 'include/footer.php';
?>
<!-- footer end -->