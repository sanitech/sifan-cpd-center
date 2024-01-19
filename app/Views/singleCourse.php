    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/css/faq.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous" />
        <script src="../assets/js/app.js" defer></script>
        <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
        <link rel="stylesheet" href="../assets/css/style.css">
        <script src="https://cdn.tailwindcss.com"></script>
    
    </head>

    <body>
    
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
        <!-- seo-info start -->

        <!-- seo-info end -->


        <!-- navbar start -->
        <?php
        include_once 'include/navbar.php';
        ?>
        <!-- navbar end -->



        <!-- main section start -->

        <header class="single-course-header">

            <div class="single-course-container">
                <div class="single-course-thumbnail">
                    <img src="<?php echo  base_url('/uploads') . '/' . $courseSingle['thumbnail'] ?>" alt="" class="category-thu" />
                </div>

                <div class="single-course-info">
                    <h1 class="single-course-title"><?php echo $courseSingle['course'] ?></h1>
                    <p><?php echo $courseSingle['disc'] ?></p>

                    <div class="about-course-info">
                        <i class="bi bi-person"></i><span><?php echo $courseSingle['inst'] ?></span>
                    </div>
                    <div class="about-course-info">
                        <i class="bi bi-clock"></i><span><?php echo $courseSingle['cr_hr'] ?> hr</span>
                    </div>
                    <div class="about-course-info">
                        <i class="bi bi-truck"></i><span><?php echo $courseSingle['co-format'] ?></span>
                    </div>
                    <div class="about-course-info">
                        <i class="bi bi-patch-check"></i><span>Certificate</span>
                    </div>


                    <a href="<?php echo base_url('/contact') ?>"> <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-dark rounded-lg hover:opacity-0.9 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Enroll Now
                        </button></a>
                </div>
                <div class="related-course-container">
                    <div class="related-course-header-text">Related Course</div>
                    <?php

                    foreach ($related as $related_course) {
                        $relatedCourseId = $related_course['co_id'];
                        if ($relatedCourseId == $id) {
                            continue;
                        };
                    ?>
                        <a href="<?php echo base_url("course/$relatedCourseId") ?>" class="related-course-card">
                            <div class="related-course-thumbnail">
                                <img src="<?php echo  base_url('/uploads') . '/' . $related_course['thumbnail'] ?>" alt="" class="category-thu" />

                            </div>
                            <div class="related-course-info">
                                <div class="related-course-title"><?php echo $related_course['course'] ?>.</div>
                                <div class="related-course-desc"><?php echo $related_course['disc'] ?>.</div>
                                <div class="course-info-footer">
                                    <div class="course-hour">
                                        <i class="bi bi-clock"></i><span><?php echo $related_course['cr_hr'] ?> hr</span>
                                    </div>
                                    <div class="course-rate">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    } ?>

                </div>
            </div>
        </header>

        <?php
        include_once 'courseFetch.php';
        ?>

        <!-- main section end -->

        <?php
        include_once 'include/faq.php';
        ?>



        <!-- footer start -->
        <?php
        include_once 'include/footer.php';
        ?>
        <!-- footer end -->