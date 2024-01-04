<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseCategoryModel;
use App\Models\CourseModel;
use App\Models\EventModel;

class CourseController extends BaseController
{
    public function createCategory()
    {

        $category = $this->request->getPost('category');
        $thumbnail = $this->request->getFile('thumbnail');
        $nameOfThumbnail = $this->request->getFile('thumbnail')->getName();
        $path['upload_path'] = getcwd() . '/uploads';

        if (!is_dir($path['upload_path'])) {
            mkdir($path['upload_path']);
        }

        if (!$thumbnail->hasMoved()) {
            $thumbnail->move($path['upload_path'], $nameOfThumbnail);
        } else {
            session()->setFlashdata('fail', 'course thumbnail uploaded failed');
            return redirect()->to('super/admin/category');
        }




        $data = ['category' => $category, 'thumbnail' => $nameOfThumbnail];

        $categoryModel = new CourseCategoryModel();
        $checkCategory = $categoryModel->where('category', $category)->first();

        if ($checkCategory) {
            echo 'ale';
            session()->setFlashdata('fail', 'Course Category already register');
            return redirect()->back();
        }

        $inserted = $categoryModel->insert($data);
        if ($inserted) {
            session()->setFlashdata('success', 'Course Category Added Successfully');
            return redirect()->back();
        } else {
            session()->setFlashdata('fail', 'Failed Course Category');
            return redirect()->back();
        }
    }


    public function deleteCategory($id = false)
    {


        $categoryModel = new CourseCategoryModel();
        $checkCategory = $categoryModel->findAll();
        if (count($checkCategory) > 0) {
            $checkCategory = $categoryModel->where('cat_id', $id)->first();

            if (!$checkCategory) {
                echo 'ale';
                session()->setFlashdata('fail', 'Course Category not found');
                return redirect()->back();
            }
        }

        $deleted = $categoryModel->delete($id);
        if ($deleted) {
            session()->setFlashdata('success', 'Course Category Added Successfully');
            return redirect()->back();
        } else {
            session()->setFlashdata('fail', 'Failed Course Category');
            return redirect()->back();
        }
    }

    public function editCategory($id = false)
    {
        $courseCategoryModel = new CourseCategoryModel();

        $data['category'] = $courseCategoryModel->findAll();
        $data['edited'] = $courseCategoryModel->find($id);
        // var_dump($category);
        return view('AdminCourseCategory', $data);
    }

    public function editCategoryBy()
    {
        $courseCategoryModel = new CourseCategoryModel();

        $id = $this->request->getPost('id');
        $category = $this->request->getPost('category');
        $thumbnail = $this->request->getFile('thumbnail');

        $nameOfThumbnail = $this->request->getFile('thumbnail')->getName();
        $path['upload_path'] = getcwd() . '/uploads';

        if ($nameOfThumbnail == null) {
            $data = ['category' => $category];
        } else {
            $data = ['category' => $category, 'thumbnail' => $nameOfThumbnail];

            if (!is_dir($path['upload_path'])) {
                mkdir($path['upload_path']);
            }
            if (!$thumbnail->hasMoved()) {
                $thumbnail->move($path['upload_path'], $nameOfThumbnail);
            } else {
                session()->setFlashdata('fail', 'course thumbnail uploaded failed');
                return redirect()->to('super/admin/course');
            }
        }



        $updated = $courseCategoryModel->update($id, $data);
        if (!$updated) {
            session()->setFlashdata('fail', 'can not update category');
            return redirect()->to('super/admin/category');
        } else {
            session()->setFlashdata('success', 'Update Category Successfully');
            return redirect()->to('super/admin/category');
        }
    }
    public function enableDisabled($id = false)
    {
        $courseCategoryModel = new CourseCategoryModel();
        $category = $courseCategoryModel->find($id);
        var_dump($category);
        echo $category['status'];

        if ($category['status']) {
            $courseCategoryModel->update($id, ['status' => 0]);
            session()->setFlashdata('success', ' Category disable Successfully');
            return redirect()->to('super/admin/category');
        } else {
            $courseCategoryModel->update($id, ['status' => 1]);
            session()->setFlashdata('success', 'Category enable Successfully');
            return redirect()->to('super/admin/category');
        }
    }
    public function createCourse()
    {
        $courseModel = new CourseModel();

        $course = $this->request->getPost('course');
        $category = $this->request->getPost('category');
        $desc = $this->request->getPost('desc');
        $cr_hour = $this->request->getPost('cr_hour');
        $thumbnail = $this->request->getFile('thumbnail');
        $nameOfThumbnail = $this->request->getFile('thumbnail')->getName();

        $path['upload_path'] = getcwd() . '/uploads';



        if (!is_dir($path['upload_path'])) {
            mkdir($path['upload_path']);
        }

        if (!$thumbnail->hasMoved()) {
            $thumbnail->move($path['upload_path'], $nameOfThumbnail);
        } else {
            session()->setFlashdata('fail', 'course thumbnail uploaded failed');
            return redirect()->to('super/admin/course');
        }


        $data = [
            'course' => $course,
            'cat_id' => $category,
            'disc' => $desc,
            'cr_hr' => $cr_hour,
            'thumbnail' => $nameOfThumbnail,
        ];
        var_dump($data);



        $checkCourse = $courseModel->where('course', $course)->where('cat_id', $category)->findAll();

        var_dump($checkCourse == null);
        if (!$checkCourse == null) {
            session()->setFlashdata('fail', 'course already exists');
            return redirect()->to('super/admin/course');
        }

        $inserted = $courseModel->insert($data);

        if (!$inserted) {
            session()->setFlashdata('fail', 'something went wrong');
            return redirect()->to('super/admin/course');
        } else {
            session()->setFlashdata('success', 'Course create Successfully');
            return redirect()->to('super/admin/course');
        }
    }

    public function deleteCourse($id = false)
    {


        $courseModel = new CourseModel();
        $checkCategory = $courseModel->findAll();
        if (count($checkCategory) <= 0) {
            $checkCategory = $courseModel->where('co_id', $id)->first();

            if (!$checkCategory) {
                echo 'ale';
                session()->setFlashdata('fail', 'Course not found');
                return redirect()->back();
            }
        }

        $deleted = $courseModel->delete($id);
        if ($deleted) {
            session()->setFlashdata('success', 'Course delete Successfully');
            return redirect()->back();
        } else {
            session()->setFlashdata('fail', 'Failed Course Category');
            return redirect()->back();
        }
    }


    public function editCourse($id = false)
    {
        $courseCategoryModel = new CourseCategoryModel();
        $courseModel = new CourseModel();

        $data['category'] = $courseCategoryModel->findAll();
        $data['edited'] = $courseModel->find($id);
        $data['course'] = $courseModel->findAll();
        // var_dump($category);
        return view('AdminCourseList', $data);
    }

    public function editCourseBy()
    {
        $courseModel = new CourseModel();

        $course = $this->request->getPost('course');
        $category = $this->request->getPost('category');
        $desc = $this->request->getPost('desc');
        $cr_hour = $this->request->getPost('cr_hour');
        $thumbnail = $this->request->getFile('thumbnail');
        $nameOfThumbnail = $this->request->getFile('thumbnail')->getName();

        $path['upload_path'] = getcwd() . '/uploads';

        if ($nameOfThumbnail == null) {
            $data = [
                'course' => $course,
                'cat_id' => $category,
                'disc' => $desc,
                'cr_hr' => $cr_hour,
            ];
        } else {
            $data = [
                'course' => $course,
                'cat_id' => $category,
                'disc' => $desc,
                'cr_hr' => $cr_hour,
                'thumbnail' => $nameOfThumbnail,
            ];
            if (!is_dir($path['upload_path'])) {
                mkdir($path['upload_path']);
            }

            if (!$thumbnail->hasMoved()) {
                $thumbnail->move($path['upload_path'], $nameOfThumbnail);
            } else {
                session()->setFlashdata('fail', 'course thumbnail uploaded failed');
                return redirect()->to('super/admin/course');
            }
        }



        $id = $this->request->getPost('id');

        $updated = $courseModel->update($id, $data);
        if (!$updated) {
            session()->setFlashdata('fail', 'can not update course');
            return redirect()->to('super/admin/course');
        } else {
            session()->setFlashdata('success', 'Update Course Successfully');
            return redirect()->to('super/admin/course');
        }
    }
}
