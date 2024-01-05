<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function hello_world()
    {
        return view('hello_world');
    }
    public function show()
    {
        $Model = new UserModel();
        $data['users'] = $Model->orderBy('id', 'DESC')->findAll();
        return view('viewdata', $data);
    }
    public function insert()
    {
        $Model = new UserModel();
        $data = [
            'Name' => $this->request->getVar('name'),
            'Email' => $this->request->getVar('email'),
            'Phone' => $this->request->getVar('phone')
        ];
        $Model->insert($data);
        echo "<script type='text/javascript'>
        alert('Record Added Successfully');
        </script>";
        return view("hello_world");
    }
    public function singleUser($id = null)
    {
        $Model = new UserModel();
        $data["users"] = $Model->where('id', $id)->first();
        return view('edituser', $data);
    }
    public function update()
    {
        $Model = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'Name' => $this->request->getVar('name'),
            'Email' => $this->request->getVar('email'),
            'Phone' => $this->request->getVar('phone')
        ];
        $Model->update($id, $data);
        return $this->response->redirect(site_url('/viewdata'));
    }
    public function delete($id = null)
    {
        $Model = new UserModel();
        $data['users'] = $Model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/viewdata'));
    }
}
