<?php

namespace App\Controllers;

use App\Models\CourseCategoryModel;
use App\Models\CourseModel;
use App\Models\EventModel;
use App\Models\TeamModel;

class Home extends BaseController
{
    public function index(): string
    {
        $eventModel = new EventModel();
        $teamModel = new TeamModel();
        $courseCategoryModel = new CourseCategoryModel();
        $courseModel = new CourseModel();
        $data['title'] = 'Home - sefan cpd center';
        $data['category'] = $courseCategoryModel->where('status', true)->limit(1)->findAll();
        $data['course'] = $courseModel->findAll();
        $data['event'] = $eventModel->findAll();
        $data['team'] = $teamModel->findAll();


        return view('home', $data);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function maintenance()
    {
        return view('error_maintenance');
    }

    public function logout()
    {
        $session = session()->get();
        session_destroy();
        return  redirect()->to('/'); // Redirect to login page
    }

    public function sendContact()
    {
        $email = \Config\Services::email();

        $request = $this->request;

        // Validate the form data (customize according to your needs)
        $validationRules = [
            'name' => 'required',
            'email' => 'required|valid_email',
            'message' => 'required'
        ];

        // if (!$this->validate($validationRules)) {
        //     return redirect()->to('/contact')->withInput()->with('errors', $this->validator->getErrors());
        // }

        // Get form data
        $name = "snaihack";
        $email = "sanitechdad@gmail.com";
        $message = "You can do something with this email address";


        if (mail('sanitech47@gmail.com', "new user registration", $message)) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
}
