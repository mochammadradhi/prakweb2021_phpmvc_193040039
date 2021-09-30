<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Home Page';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header',$data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}