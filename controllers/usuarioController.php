<?php

class usuarioController extends Usuario{


    public function __construct(){
        Seguridad::verificarUsuario();
    }

    public function registerUser(){ 

        if(isset($_POST)){
            $data = array();
            session_unset();
            $error = true;
            //verificar que el usuario no este en uso
            if(!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $data['email'] = trim($_POST['email']);
                $error = false;
            }else{
                $_SESSION['flash_msm'] = "El email es incorrecto";
                $error = true;
            }
            
            if(!empty($_POST['nickname']) && preg_match("/^[a-zA-Z0-9]*$/", $_POST['nickname'])){
                $data['nickname'] = trim($_POST['nickname']);
                $error = false;
            }else{
                $_SESSION['flash_msm'] = "El nickname no esta disponible es incorrecto";
                $error = true;
            }

            if(isset($_POST['pwa']) && $_POST['pwa'] === $_POST['pwar'] && !empty($_POST['pwa']) && !empty($_POST['pwar'])){
                $data['pwa'] = $_POST['pwa'];
                $error = false;
            }else{
                $_SESSION['flash_msm'] = "Las contaseñas no coinsiden";
                $error = true;
            }

            $usuario_validado = parent::verificarUsuario($data['email'], $data['nickname']);
            if($usuario_validado == false && $error == false){
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

    public function deleteAccount(){
        if(isset($_SESSION['usuario'])){
            $borrar = parent::borrarUsuario($_SESSION['usuario']);
            if($borrar){
                header('Location: ?controller=index');
            }else{
                header('Location: ?controller=usuario&method=dashboard');
            }
        }else{
            header('Location: ?controller=usuario&method=dashboard');
        }
    }

    public function dashboard(){
        require_once 'views/index/header.php';
        require_once 'views/users/navbar.php';
        require_once 'views/users/index.php';
        require_once 'views/index/footer.php';
    }
}