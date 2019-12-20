<?php

class Entrada extends Database{


    public function obtenerTodasLasEntradas(){
        try {
            $result = parent::conectar() -> prepare("SELECT * FROM entradas LIMIT 20");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}