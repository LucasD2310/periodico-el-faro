<?php

class Registro extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
        $this->view->mensaje = "";
    }

    function render(){
=======
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
        $this->view->render('registro/index');
    }

    function registrarNuevoUsuario(){
        $nombre = $_POST['nombre'];
        $email  = $_POST['email'];

<<<<<<< HEAD
        $mensaje = "";

        if($this->model->insertuser(['nombre' => $nombre, 'email' => $email])){
            $mensaje = "Usuario Registrado Correctamente";
        }else{
            $mensaje = "Usuario Previamente Registrado";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
=======
        if($this->model->insertuser(['nombre' => $nombre, 'email' => $email])){
            echo "Usuario Registrado Correctamente";
        }   
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
    }
}

?>