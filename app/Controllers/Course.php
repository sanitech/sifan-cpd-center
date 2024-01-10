<?php

namespace App\Controllers;

use App\Models\CourseCategoryModel;
use App\Models\CourseModel;

class Course extends BaseController
{
    public function index(): string
    {
        $courseCategoryModel = new CourseCategoryModel();
        $courseModel = new CourseModel();
        $data['title'] = 'course';
        $data['category'] = $courseCategoryModel->orderBy('date', 'desc')->findAll();
        $data['course'] = $courseModel->orderBy('date', 'desc')->findAll();
        return view('course', $data);
    }
    public function courseByCategory($id = false)
    {
        $courseCategoryModel = new CourseCategoryModel();
        $courseModel = new CourseModel();

        $data['category'] = $courseCategoryModel->findAll();
        $data['course'] = $courseModel->where('cat_id', $id)->findAll();

        return view('courseCategory', $data);
    }



    public function courseBySingle($id = false)
    {
        $courseCategoryModel = new CourseCategoryModel();
        $courseModel = new CourseModel();

        $data['category'] = $courseCategoryModel->findAll();
        $data['courseSingle'] = $courseModel->where('co_id', $id)->first();
        $data['course'] = $courseModel->orderBy('date', 'desc')->findAll();
        $catID = $data['courseSingle']['cat_id'];
        $data['related'] = $courseModel->where('cat_id', $catID)->orderBy('date', 'desc')->findAll();
        $data['id'] = $id;

        return view('singleCourse', $data);
    }


    public function fetchCourse()
    {
        $course = $this->request->getPost('course');
        $category = $this->request->getPost('category');

        $courseModel = new CourseModel();

        $data = ['cat_id' => $category, 'course' => $course];
        $courses = $courseModel->like($data)->orderBy('date', 'desc')->findAll();

        if ($courses == null) {
            $notFound = "No Course found";
            echo "<div class='alert alert-info'>$notFound</div>";
        }


        foreach ($courses as $course) :
            $id = $course['co_id']; ?>
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
    }
}
