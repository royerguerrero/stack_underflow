<?php

class Usuario extends Database{
    
    // Esta funcion guarda en la base de datos
    public function verificarUsuario($email, $nickname){
        try{
            $result = parent::conectar() -> prepare("SELECT email, nickname FROM usuarios WHERE email = ? AND nickname = ?");
            $result->bindParam(1, $email, PDO::PARAM_STR);
            $result->bindParam(2, $nickname, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function registrarUsuario($datos){
        try{
            $result = parent::conectar()->prepare("INSERT INTO usuarios VALUES(null, ?, ?, ?, 'Ingresa aqui tu biografia...', CURRENT_DATE(), 1, 1)");
            $result->bindParam(1, $datos['email'], PDO::PARAM_STR);
            $result->bindParam(2, $datos['nickname'], PDO::PARAM_STR);
            $result->bindParam(3, $datos['pwa'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
            $_SESSION['flash-msm'] = 'El usuario o el correo ya esta en uso';
            header('Location: ?method=sing_up');
            die("Error al registar el usuario " . $e->getMessage());
        }
    }

    public function borrarUsuario($id){
        try{
            if(isset($id)){
                $result = parent::conectar() -> prepare("UPDATE usuarios SET estado_id = 2 WHERE id = ?");
                $result->bindParam(1, $id, PDO::PARAM_INT);
                return $result->execute();
                
            }else{
                header('Location: ?controller=index');
            }
        }catch (Exception $e){
            die($e->getMessage());
        }
        
    }

}