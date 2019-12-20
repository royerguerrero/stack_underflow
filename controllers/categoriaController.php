<?php

class categoriaController extends Categoria{


    public function index(){
        require_once 'views/index/header.php';
        require_once 'views/entradas/categorias.php';
    }

    public function getAllCategories(){
        $categorias = (count(parent::obtenerTodasLasCategorias()) > 0) ? parent::obtenerTodasLasCategorias() : '<span class="text-center">🤷‍♀️ No hay categorias aun 🤦‍♀️</span>';
        return $categorias;
    }
}