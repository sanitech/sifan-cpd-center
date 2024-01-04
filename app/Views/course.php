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

<header class="content-header">

    <div class="content-header-thumbnail">
        <img src="" alt="">
        <h1 class="content-header-text">Course </h1>
        <h3 class="content-header-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facilis est magnam aut ipsum quasi laborum perspiciatis nisi nulla incidunt?</h3>
    </div>
</header>


<section class="course-list-section">

    <h3>Course</h3>


    <div class="filter-container">

        <div class="filter-course filter-btn">
            <i class="bi bi-filter"></i> <span>Filter</span>
        </div>
        <div class="row-filter">
            <div class="filter-course">
                <select name="" id="">
                    <option value="" disabled selected>By Category</option>
                    <?php foreach ($category as $category) : ?>
                        <option value=""><?php echo $category['category'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-course">
                <div class="search-box">
                    <input type="text" name="" id="" placeholder="Search...">
                    <i class="bi bi-search"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- filter end -->


    <!-- course start -->
    <div class="course-list-container">

        <?php
        foreach ($course as $course) :
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