<?php

class Registro extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('registro/index');
    }

    function registrarNuevoUsuario(){
        $nombre = $_POST['nombre'];
        $email  = $_POST['email'];

        if($this->model->insertuser(['nombre' => $nombre, 'email' => $email])){
            echo "Usuario Registrado Correctamente";
        }   
    }
}

?>