<?php

class Categoria extends Database{

    public function obtenerTodasLasCategorias(){
        try{
            $result = parent::conectar() -> prepare("SELECT * FROM categorias");
            $result->execute();
            return $result->fetchAll();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

}