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

    public function verificarUsuario(){
        
        if(!isset($_SESSION['usuario'])){
            header('Location: ?method=sing_in');
        }else if($_SESSION['usuario']->estado_id == 2){
            $_SESSION['flash-msm-in'] = 'El usuario esta inactivo, comuniquese con su administrador';             
            header('Location: ?method=sing_in');
        }
    }

} 