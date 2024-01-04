<?php

namespace App\Controllers;

use App\Models\CourseCategoryModel;
use App\Models\CourseModel;
use App\Models\EventModel;
use App\Models\TeamModel;

class AdminPanel extends BaseController
{
    public function index(): string
    {

        return view('AdminLogin');
    }
    public function dashboard()
    {
        if (!session()->get('userId')) {
            return redirect()->back();
        }
        return view('dashboard');
    }
    public function category()
    {
        $courseCategoryModel = new CourseCategoryModel();
        if (!session()->get('userId')) {
            return redirect()->back();
        }

        $data['category'] = $courseCategoryModel->findAll();
        return view('AdminCourseCategory',  $data);
    }
    public function courseList()
    {
        $courseCategoryModel = new CourseCategoryModel();
        $courseModel = new CourseModel();
        if (!session()->get('userId')) {
            return redirect()->back();
        }
        $data['category'] = $courseCategoryModel->where('status', true)->findAll();
        $data['course'] = $courseModel->findAll();

        return view('AdminCourseList', $data);
    }
    public function event()
    {
        $eventModel = new EventModel();

        if (!session()->get('userId')) {
            return redirect()->back();
        }
        $data['event'] = $eventModel->findAll();
        return view('AdminEvent', $data);
    }
    public function team()
    {
        $teamModel = new TeamModel();

        if (!session()->get('userId')) {
            return redirect()->back();
        }
        $data['team'] = $teamModel->findAll();
        return view('AdminTeam', $data);
    }
}
