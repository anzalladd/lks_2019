<?php

class Admin extends Controller{
    public function index() {
        $data['judul'] = 'Admin';
        $data['contents'] = $this->model('Content_model')->getContents();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
    public function tambah() {
        if($this->model('Admin_model')->addContent($_POST)> 0) {
            header('Location:' . BASEURL . '/admin');
            exit;
        }
    }
    public function delete($id) {
        if($this->model('Admin_model')->deleteContent($id) > 0) {
            header('Location:' . BASEURL . '/admin');
            exit;
        }
    }
    
    public function edit($id) {
        $data['judul'] = 'Admin';
        $data['content'] = $this->model('Content_model')->getContent($id);
        $this->view('templates/header', $data);
        $this->view('admin/edit', $data);
        $this->view('templates/footer');
    }

    public function update(){
        if($this->model('Admin_model')->updateContent($_POST) >0) {
            header('Location:' . BASEURL . '/admin');
            exit;
        }
    }
}