<?php

class Registro extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        $this->view->mensaje = "";
    }

    function render(){
<<<<<<< HEAD
=======
=======
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        $this->view->render('registro/index');
    }

    function registrarNuevoUsuario(){
        $nombre = $_POST['nombre'];
        $email  = $_POST['email'];

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        $mensaje = "";

        if($this->model->insertuser(['nombre' => $nombre, 'email' => $email])){
            $mensaje = "Usuario Registrado Correctamente";
        }else{
            $mensaje = "Usuario Previamente Registrado";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
<<<<<<< HEAD
=======
=======
        if($this->model->insertuser(['nombre' => $nombre, 'email' => $email])){
            echo "Usuario Registrado Correctamente";
        }   
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
    }
}

?>