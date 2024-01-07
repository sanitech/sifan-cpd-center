<section class="course-list-section">

    <h3>Course</h3>


    <div class="filter-container">
        <div class="filter-course filter-btn">
            <i class="bi bi-filter"></i> <span>Filter</span>
        </div>
        <div class="row-filter">
            <div class="filter-course">
                <select name="" id="category" onchange="searchCourse()">
                    <option value="category" disabled selected>By Category</option>
                    <?php foreach ($category as $category) : ?>
                        <option value="<?php echo $category['cat_id'] ?>"><?php echo $category['category'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-course">
                <div class="search-box">
                    <input type="text" name="" id="course" onkeyup="searchCourse()" placeholder="Search...">
                    <i class="bi bi-search"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- filter end -->


    <!-- course start -->
    <div class="course-list-container" id="courseContainer">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        const searchCourse = () => {
            $.ajax({
                url: `/fetchCourse`,
                method: 'POST',
                data: {
                    course: $('#course').val(),
                    category: $('#category').val(),
                },
                success: function(result) {
                    $("#courseContainer").html(result);
                }
            });
        }
    </script>
</section>