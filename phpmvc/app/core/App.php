<?php

Class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
        $url=  $this->parseURL();
        
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method mengecek jika kosong akan menggunakan default jika tidak akan ditimpa
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //cek params
        if(!empty($url)){
            $this->params = array_values($url);
            
        }

        //untuk menjalakanan controller dan method untuk di kirim ke params
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}