<?php

class Database{

    public function conectar(){
        try{
            return new PDO('mysql:host=localhost;dbname=stack_underflow_dev;charset=utf8;',
                            'root', '',[
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                            ]
        );
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}

?>