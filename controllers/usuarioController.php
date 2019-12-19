<?php

class usuarioController extends Usuario{

    public function registrar(){ 

        if(isset($_POST)){
            $data = array();
            session_unset();
            $error = true;
            //verificar que el usuario no este en uso
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $data['email'] = trim($_POST['email']);
                $error = false;
            }else{
                $_SESSION['flash_msm'] = "El email es incorrecto";
            }
            
            if(isset($_POST['nickname']) && !empty($_POST['nickname'])){
                $data['nickname'] = trim($_POST['nickname']);
                $error = false;
            }else{
                $_SESSION['flash_msm'] = "El nickname no esta disponible es incorrecto";
            }

            if(isset($_POST['pwa']) && $_POST['pwa'] === $_POST['pwar'] && !empty($_POST['pwa']) && !empty($_POST['pwar'])){
                $data['pwa'] = $_POST['pwa'];
                $error = false;
            }else{
                $_SESSION['flash_msm'] = "Las contaseñas no coinsiden";
            }

            $usuario_validado = parent::verificarUsuario($data['email'], $data['nickname']);
            
            if(count($usuario_validado) == 0 && $error == false){
                //registar usuario
                $data['pwa'] = password_hash($_POST['pwa'], PASSWORD_BCRYPT, ['cost' => 4]);
                $registro = parent::registrarUsuario($data);
                if($registro){
                    $_SESSION['flash-ok'] = "Felicidades, el usuario ha sido registrado";
                }
            }else{
                //enviar error
                $_SESSION['flash_msm'] = "Lo sentimos el email o el nickname ya esta en uso";
            }
         }


         header('Location: ?method=sing_up');
    }
}