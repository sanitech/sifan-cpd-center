<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserAdminModel;

class AdminLoginController extends BaseController
{

    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function adminLoginController()
    {

        $db = \Config\Database::connect();
        // $validated = $this->validate([
        //     'username' => [
        //         'rules' => 'required|min_length[3]',
        //         'errors' => [
        //             'required' => 'username require',
        //         ]
        //     ],
        //     'password' => [
        //         'rules' => 'required|min_length[6]|max_length[8]',
        //         'errors' => [
        //             'required' => 'password require',
        //             'min_length' => 'password must be 6 character long',
        //             'max_length' => ' max length of password 8 character',
        //         ]
        //     ],
        // ]);

        // if (!$validated) {
        //     return view('AdminLogin', ['validation' => $this->validator]);
        // }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        echo Hash::encrypt($password);

        // $data = [
        //     'username' => $username,
        //     'password' => Hash::encrypt($password),
        // ];

        try {
            $userModel = new UserAdminModel();
            $user = $userModel->where('username', $username)->first();
            if (!$user) {
                session()->setFlashdata('failed', 'User not found');
                return redirect()->to('super/admin');
            }
            $checkPassword = Hash::check($password, $user['password']);
            if (!$checkPassword) {
                session()->setFlashdata('failed', 'Password is incorrect');
                return redirect()->to('super/admin');
            } else {
                session()->set('userId', $user['id']);
                return redirect()->to('super/admin/dashboard');
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}
