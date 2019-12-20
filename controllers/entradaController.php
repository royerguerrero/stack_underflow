<?php

class entradaController extends Entrada{

    public function index(){
        require_once 'views/index/header.php';
        if(!isset($_SESSION['usuario'])){
            require_once 'views/usuarios/navbar.php';
        }else{
            require_once 'views/index/navbar.php';
        }
        require_once 'views/entradas/categorias.php';
        require_once 'views/entradas/index.php';
        require_once 'views/index/footer.php';
    }

    public function getAllEntraces(){
        $categorias = (!count(parent::obtenerTodasLasEntradas()) == 0) ? parent::obtenerTodasLasEntradas() : '<span class="taxt-center">😐 Upss, Aun no hay entradas 🙇‍♂️</span>';
        return $categorias;
    }

}