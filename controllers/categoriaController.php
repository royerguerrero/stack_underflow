<?php

class categoriaController extends Categoria{


    public function index(){
        require_once 'views/index/header.php';
        require_once 'views/entradas/categorias.php';
    }

    public function getAllCategories(){
        $categorias = (parent::obtenerTodasLasCategorias() == true) ? parent::obtenerTodasLasCategorias() : '🤷‍♀️ No hay categorias aun 🤦‍♀️';
        return $categorias;
    }
}