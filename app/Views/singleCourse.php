<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous" />
    <script src="../assets/js/app.js" defer></script>

</head>

<body>

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

    <header class="single-course-header">

        <div class="single-course-container">
            <div class="single-course-thumbnail">
                <img src="<?php echo  base_url('/uploads') . '/' . $course['thumbnail'] ?>" alt="" class="category-thu" />
            </div>

            <div class="single-course-info">
                <h1 class="single-course-title"><?php echo $course['course'] ?></h1>
                <p><?php echo $course['disc'] ?></p>
                <div class="course-info-footer">
                    <div class="course-hour">
                        <i class="bi bi-clock"></i><span><?php echo $course['cr_hr'] ?> hr</span>
                    </div>
                    <div class="course-rate">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                </div>
                <button class="btn-take">Enroll Now</button>
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


    <section class="course-list-section">

        <h3>Course</h3>
        <div class="filter-container">

            <div class="filter-course filter-btn">
                <i class="bi bi-filter"></i> <span>Filter</span>
            </div>
            <div class="filter-course">
                <select name="" id="">
                    <option value="" disabled selected>By Category</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>

                </select>
            </div>
            <div class="filter-course">
                <select name="" id="">
                    <option value="" disabled selected>By Credit hour</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>
                    <option value="">Coronavirues</option>

                </select>
            </div>
            <div class="filter-course">
                <div class="search-box">
                    <input type="text" name="" id="" placeholder="Search...">
                    <i class="bi bi-search"></i>
                </div>
            </div>
        </div>

        <!-- filter end -->


        <!-- course start -->
        <div class="course-list-container">
            <?php
            foreach ($courseAll as $course) :
                $id = $course['co_id'];

            ?>
                <a href="<?php echo base_url("course/$id") ?>" class="course-card">
                    <div class="course-thumbnail">
                        <img src="<?php echo  base_url('/uploads') . '/' . $course['thumbnail'] ?>" alt="" class="category-thu" />

                    </div>
                    <div class="course-info-card">
                        <h3 class="course-title"><?php echo $course['course'] ?></h3>
                        <div class="course-desc"><?php echo $course['disc'] ?></div>
                    </div>
                    <div class="course-info-footer">
                        <div class="course-hour">
                            <i class="bi bi-clock"></i><span><?php echo $course['cr_hr'] ?>hr</span>
                        </div>
                        <div class="course-rate">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                    </div>
                </a>

            <?php
            endforeach;
            ?>



        </div>

    </section>

    <!-- main section end -->



    <!-- footer start -->
    <?php
    include_once 'include/footer.php';
    ?>
    <!-- footer end -->