<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['contents'] = $this->model('Content_model')->getContents();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id) {
        $data['judul'] = 'Detail';
        $data['content'] = $this->model('Content_model')->getContent($id);
        $this->view('templates/header', $data);
        $this->view('detail/index', $data);
        $this->view('templates/footer');
    }
}