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

        $data['category'] = $courseCategoryModel->findAll();
        $data['course'] = $courseModel->findAll();
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
        $data['course'] = $courseModel->where('co_id', $id)->first();
        $data['courseAll'] = $courseModel->orderBy('date', 'desc')->findAll();
        $catID = $data['course']['cat_id'];
        $data['related'] = $courseModel->where('cat_id', $catID)->orderBy('date', 'desc')->findAll();
        $data['id'] = $id;

        return view('singleCourse', $data);
    }
}
