<?php

class indexController{

    public function index(){
        require_once 'views/index/header.php';
        require_once 'views/index/navbar.php';
        require_once 'views/index/index.php';
        require_once 'views/index/footer.php';
    }

    public function sing_in(){
        require_once 'views/index/header.php';
        require_once 'views/index/navbar.php';
        require_once 'views/index/sing_in.php';
        require_once 'views/index/footer.php';
    }

    public function sing_up(){
        require_once 'views/index/header.php';
        require_once 'views/index/navbar.php';
        require_once 'views/index/sing_up.php';
        require_once 'views/index/footer.php';
    }
}