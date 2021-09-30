<?php

class About extends Controller{

    public function index($nama = 'Radhi',$pekerjaan = 'Mahasiswa',$umur = 23){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'Halaman About Me';
        $this->view('template/header', $data);
        $this->view('about/index',$data);
        $this->view('template/footer');
    }

    public function page(){
        $data['judul'] = 'My Page';
        $this->view('template/header',$data);
        $this->view('about/page'); 
        $this->view('template/footer');
    }

}