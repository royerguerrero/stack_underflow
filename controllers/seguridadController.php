<?php

class seguridadController extends Seguridad{

    public function __construct(){
        Seguridad::verificarUsuario();
    }

    public function sing_in(){
        if(isset($_POST)){        
            if(!empty($_POST['nickname'])){
                //llamar a la funcion para verificar la existencia del usuario
                $usuario = parent::getUsuario($_POST['nickname']);
                //regrsa el usuario como un OBJ

                if(is_object($usuario)){
                    if(isset($_POST['pwa'])){
                        //$_POST['pwa'] = password_hash($_POST['pwa'], PASSWORD_BCRYPT, ['cost' => 4]);
                        if(password_verify($_POST['pwa'], $usuario->password)){
                            $_SESSION['usuario'] = $usuario;
                            header('Location: ?controller=usuario&method=dashboard');
                        }else{
                            $_SESSION['flash-msm-in'] = 'Contraseña incorrecta, Error 403 🚫';              
                        }
                    }
                    die();
                    
                }else{
                    $_SESSION['flash-msm-in'] = 'El usuario no existe, <a href="?method=sing_up">registrate aqui</a>';              
                }
            }else{
                $_SESSION['flash-msm-in'] = 'El usuario no puede ser vacio';
            }
        }
    }


    public function logout(){
        session_unset();
        session_destroy();
        header('Location: ?controller=index');
    }
}