<?php

class usuarioController extends Usuario{

    public function registrar(){
         
        if(isset($_POST)){
            $datos = array();
            session_unset();
            //verificar que el usuario no este en uso
            $email = isset($_POST['email']) && !empty($_POST['email']) ? $data['email'] = trim($_POST['email']) : $_SESSION['flash_msm'] = "El email es incorrecto";
            $nickname = isset($_POST['nickname']) && !empty($_POST['nickname']) ? $data['nickname'] = trim($_POST['nickname']) : $_SESSION['flash_msm'] = "El nickname no esta disponible es incorrecto";
            $pwa = isset($_POST['pwa']) && $_POST['pwa'] === $_POST['pwar'] && !empty($_POST['pwa']) && !empty($_POST['pwar']) ? $data['pwa'] = $_POST['pwa'] : $_SESSION['flash_msm'] = "Las contaseñas no coinsiden";
            $usuario_validado = parent::verificarUsuario($data['email'], $data['nickname']);
            
            if(count($usuario_validado) == 0){
                //registar usuario
                var_dump(parent::registrarUsuario($datos));
            }else{
                //enviar error
                $_SESSION['flash_msm'] = "Lo sentimos el email o el nickname ya esta en uso";
            }
         }


         //header('Location: ?method=sing_up');
    }
}