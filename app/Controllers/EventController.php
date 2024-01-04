<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;

class EventController extends BaseController
{
    public function createEvent()
    {
        $eventModel = new EventModel();

        $event = $this->request->getPost('event');
        $start = $this->request->getPost('start');
        $end = $this->request->getPost('end');
        $place = $this->request->getPost('place');
        $date = $this->request->getPost('date');
        $thumbnail = $this->request->getFile('thumbnail');
        $thumbnailName = $this->request->getFile('thumbnail')->getName();


        $path['upload_path'] = getcwd() . '/uploads';

        if (!is_dir($path['upload_path'])) {
            mkdir($path['upload_path']);
        }

        if (!$thumbnail->hasMoved()) {
            $thumbnail->move($path['upload_path'], $thumbnailName);
        } else {
            session()->setFlashdata('fail', 'course thumbnail uploaded failed');
            return redirect()->to('super/admin/event');
        }


        $date = [
            'event' => $event,
            'start' => $start,
            'end' => $end,
            'place' => $place,
            'date' => $date,
            'thumbnail' => $thumbnail->getName()
        ];



        var_dump($date);

        $inserted = $eventModel->insert($date);
        if (!$inserted) {
            session()->setFlashdata('fail', 'event inserted failed');
            return redirect()->to('super/admin/event');
        } else {
            session()->setFlashdata('success', 'event inserted successfully');
            return redirect()->to('super/admin/event');
        }
    }

    public function deleteEvent($id = false)
    {


        $eventModel = new EventModel();
        $checkCategory = $eventModel->findAll();
        if (count($checkCategory) > 0) {
            $checkCategory = $eventModel->where('id', $id)->first();

            if (!$checkCategory) {
                echo 'ale';
                session()->setFlashdata('fail', 'Event Category not found');
                return redirect()->back();
            }
        }

        $deleted = $eventModel->delete($id);
        if ($deleted) {
            session()->setFlashdata('success', 'Delete Event successfully');
            return redirect()->back();
        } else {
            session()->setFlashdata('fail', 'Failed');
            return redirect()->back();
        }
    }

    public function editEvent($id = false)
    {
        $eventModel = new EventModel();

        $data['event'] = $eventModel->findAll();
        $data['edited'] = $eventModel->find($id);
        // var_dump($category);
        return view('AdminEvent', $data);
    }

    public function editEventBy()
    {
        $eventModel = new EventModel();

        $event = $this->request->getPost('event');
        $start = $this->request->getPost('start');
        $end = $this->request->getPost('end');
        $place = $this->request->getPost('place');
        $date = $this->request->getPost('date');
        $thumbnail = $this->request->getFile('thumbnail');
        $thumbnailName = $this->request->getFile('thumbnail')->getName();

        $path['upload_path'] = getcwd() . '/uploads';

        if ($thumbnailName == null) {
            $data = [
                'event' => $event,
                'start' => $start,
                'end' => $end,
                'place' => $place,
                'date' => $date,
            ];
        } else {
            $data = [
                'event' => $event,
                'start' => $start,
                'end' => $end,
                'place' => $place,
                'date' => $date,
                'thumbnail' => $thumbnailName
            ];
            if (!is_dir($path['upload_path'])) {
                mkdir($path['upload_path']);
            }
            if (!$thumbnail->hasMoved()) {
                $thumbnail->move($path['upload_path'], $thumbnailName);
            } else {
                session()->setFlashdata('fail', 'Event thumbnail uploaded failed');
                return redirect()->to('super/admin/event');
            }
        }

        var_dump($data);



        $id = $this->request->getPost('id');

        $updated = $eventModel->update($id, $data);
        if (!$updated) {
            session()->setFlashdata('fail', 'can not update course');
            return redirect()->to('super/admin/event');
        } else {
            session()->setFlashdata('success', 'Update event Successfully');
            return redirect()->to('super/admin/event');
        }
    }
}
