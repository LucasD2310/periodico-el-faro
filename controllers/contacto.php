<?php

class Contacto extends Controller{

    function __construct(){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('contacto/index');
<<<<<<< HEAD
=======
=======
        parent::__construct();;
        $this->view->render('contacto/index');
        
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
    }

    function registrarNuevoContacto(){
        $nombre   = $_POST['user_name'];
        $email    = $_POST['user_email'];
        $asunto   = $_POST['user_subject'];
        $msg      = $_POST['user_msg'];

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        $mensaje = "";

        if($this->model->insertcontact(['nombre' => $nombre, 'email' => $email, 
        'asunto' => $asunto, 'msg' => $msg])){
            $mensaje = "Gracias por Contactanos. Atenderemos su solicitud a la brevedad";
        }else{
            $mensaje = "Problemas al registrar el contacto. Intentelo Nuevamante";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
<<<<<<< HEAD
=======
=======
        $this->model->insertcontact(['nombre' => $nombre, 'email' => $email, 
        'asunto' => $asunto, 'msg' => $msg]);
        
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
    }
}

?>