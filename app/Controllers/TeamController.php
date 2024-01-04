<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeamModel;

class TeamController extends BaseController
{
    public function createTeam()
    {
        $teamModel = new TeamModel();

        $name = $this->request->getPost('name');
        $work = $this->request->getPost('work');
        $thumbnail = $this->request->getFile('pic');
        $picName = $this->request->getFile('pic')->getName();


        $path['upload_path'] = getcwd() . '/uploads';

        if (!is_dir($path['upload_path'])) {
            mkdir($path['upload_path']);
        }

        if (!$thumbnail->hasMoved()) {
            $thumbnail->move($path['upload_path'], $picName);
        } else {
            session()->setFlashdata('fail', 'course thumbnail uploaded failed');
            return redirect()->to('super/admin/team');
        }


        $date = [
            'name' => $name,
            'work' => $work,
            'pic' => $picName
        ];



        var_dump($date);

        $inserted = $teamModel->insert($date);
        if (!$inserted) {
            session()->setFlashdata('fail', 'team inserted failed');
            return redirect()->to('super/admin/team');
        } else {
            session()->setFlashdata('success', 'team inserted successfully');
            return redirect()->to('super/admin/team');
        }
    }


    public function enableDisabled($id = false)
    {
        $teamModel = new TeamModel();
        $team = $teamModel->find($id);

        if ($team['status']) {
            $teamModel->update($id, ['status' => 0]);
            session()->setFlashdata('success', 'Team disable Successfully');
            return redirect()->to('super/admin/team');
        } else {
            $teamModel->update($id, ['status' => 1]);
            session()->setFlashdata('success', 'Team enable Successfully');
            return redirect()->to('super/admin/team');
        }
    }


    public function deleteTeam($id = false)
    {


        $teamModel = new TeamModel();
        $checkCategory = $teamModel->findAll();
        if (count($checkCategory) <= 0) {
            $checkCategory = $teamModel->where('id', $id)->first();

            if (!$checkCategory) {
                echo 'ale';
                session()->setFlashdata('fail', 'Team not found');
                return redirect()->back();
            }
        }

        $deleted = $teamModel->delete($id);
        if ($deleted) {
            session()->setFlashdata('success', 'Team delete Successfully');
            return redirect()->back();
        } else {
            session()->setFlashdata('fail', 'Failed Team');
            return redirect()->back();
        }
    }

    public function editTeam($id = false)
    {
        $teamModel = new TeamModel();

        $data['edited'] = $teamModel->find($id);
        $data['team'] = $teamModel->findAll();
        return view('AdminTeam', $data);
    }

    public function editTeamBy()
    {
        $teamModel = new TeamModel();

        $name = $this->request->getPost('name');
        $work = $this->request->getPost('work');
        $thumbnail = $this->request->getFile('pic');
        $picName = $this->request->getFile('pic')->getName();

        $path['upload_path'] = getcwd() . '/uploads';

        if ($picName == null) {
            $data = [
                'name' => $name,
                'work' => $work,
            ];
        } else {
            $data = [
                'name' => $name,
                'work' => $work,
                'pic' => $picName
            ];
            if (!is_dir($path['upload_path'])) {
                mkdir($path['upload_path']);
            }
            if (!$thumbnail->hasMoved()) {
                $thumbnail->move($path['upload_path'], $picName);
            } else {
                session()->setFlashdata('fail', 'Team images uploaded failed');
                return redirect()->to('super/admin/team');
            }
        }

        $id = $this->request->getPost('id');

        $updated = $teamModel->update($id, $data);
        if (!$updated) {
            session()->setFlashdata('fail', 'can not update team information');
            return redirect()->to('super/admin/team');
        } else {
            session()->setFlashdata('success', 'Update team Successfully');
            return redirect()->to('super/admin/team');
        }
    }
}
