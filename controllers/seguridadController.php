<?php

class seguridadController extends Seguridad{

    public function sing_in(){
        
        if(isset($_POST)){        
            if(!empty($_POST['nickname'])){
                //llamar a la funcion para verificar la existencia del usuario
                $usuario = parent::getUsuario($_POST['nickname']);
                //regrsa el usuario como un OBJ

                if(is_object($usuario)){
                    if(isset($_POST['recordar']) && $_POST['recordar'] == 'on'){
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['usuario']->remeber = true;
                    }else{
                        $_SESSION['usuario'] = $usuario;
                    }
                    
                    self::redirectUsuario($usuario);
                }else{
                    $_SESSION['flash-msm-in'] = 'El usuario no existe, <a href="?method=sing_up">registrate aqui</a>';              
                }
            }else{
                $_SESSION['flash-msm-in'] = 'El usuario no puede ser vacio';
            }
        }
    }

    public function redirectUsuario($data){
        if(!empty($_SESSION['usuario'])){

        }else{
            header('Location: ?method=');
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        setcookie("recordar", false, time() - 3600);
    }
}