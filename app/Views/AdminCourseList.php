<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="../../../assets/css/style.css">

<div class="row">
    <div class="col-md-5">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Course</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
                    <form action="<?php echo isset($edited) ? base_url("edit/course/now") : base_url('create/course') ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        if (!empty(session()->getFlashdata('fail'))) { ?>
                            <div class="alert alert-danger mt-3"><?php echo session()->getFlashdata('fail') ?></div>
                        <?php
                        }
                        if (!empty(session()->getFlashdata('success'))) { ?>
                            <div class="alert alert-success mt-3"><?php echo session()->getFlashdata('success') ?></div>
                        <?php
                        }

                        ?>
                        <div class="mb-3">
                            <input type="hidden" name="id" id="" value="<?php echo isset($edited) ? $edited['co_id'] : '' ?>">
                            <label class="form-label" for="basic-default-fullname">Course title</label>
                            <input type="text" class="form-control" name="course" id="basic-default-fullname" placeholder="" value="<?php echo isset($edited) ? $edited['course'] : '' ?>" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Course Category</label>
                            <select class="form-select" id="exampleFormControlSelect1" name="category" aria-label="Default select example">
                                <option disabled selected>Select Category</option>
                                <?php
                                foreach ($category as $category) { ?>
                                    <option value="<?php echo $category['cat_id'] ?>" <?php if (isset($edited)) {
                                                                                            if ($edited['cat_id'] == $category['cat_id']) {
                                                                                                echo 'selected';
                                                                                            }
                                                                                        } ?>><?php echo $category['category'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-4 col-form-label">Delivery Format</label>
                            <div class="col-md-12">
                                <select name="format" class="form-control" id="">
                                    <option value="in-person">in-person</option>
                                    <option value="Online">Online</option>
                                    <option value="Blended">Blended</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-4 col-form-label">Instructor</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="inst" value="<?php echo isset($edited) ? $edited['inst'] : '' ?>" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-4 col-form-label">Credited Hour</label>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="cr_hour" value="<?php echo isset($edited) ? $edited['cr_hr'] : '' ?>" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-3 col-form-label">Description</label>
                            <!-- <div class="col-md-12"> -->
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="5"><?php echo isset($edited) ? $edited['disc'] : '' ?></textarea>
                            <!-- </div> -->
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Course thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="formFile" />
                        </div>

                        <button type="submit" class="btn btn-primary">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Course List</h5>
            <div class="related-course-container card-body">
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
                            <option value="" disabled selected>By Credited hour</option>
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

                <?php
                foreach ($course as $course) :
                    $id = $course['co_id'];
                ?>
                    <a href="<?php echo base_url("edit/course/$id") ?>">
                        <div class=" related-course-card">
                            <div class="related-course-thumbnail">
                                <img src="<?php echo base_url('/uploads') . '/' . $course['thumbnail'] ?>" alt="">
                            </div>
                            <div class="related-course-info">
                                <div class="related-course-title"><?php echo $course['course'] ?></div>
                                <div class="related-course-desc"><?php echo $course['disc'] ?></div>
                                <div class="btn btn-danger"><a href="<?php echo base_url("delete/course/$id") ?>">Delete</a></div>
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
                            </div>
                        </div>
                    </a>
                <?php
                endforeach;
                ?>


            </div>
        </div>
    </div>
</div>


<?= $this->endSection('') ?>