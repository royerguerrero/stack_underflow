<?php 

class Seguridad extends Database{

    public function getUsuario($nickname){
        try {
            $result = parent::conectar()-> prepare("SELECT * FROM usuarios WHERE nickname = ?");
            $result->bindParam(1, $nickname, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
} 