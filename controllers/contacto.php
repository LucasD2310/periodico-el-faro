<?php

class Contacto extends Controller{

    function __construct(){
        parent::__construct();;
        $this->view->render('contacto/index');
        
    }

    function registrarNuevoContacto(){
        $nombre   = $_POST['user_name'];
        $email    = $_POST['user_email'];
        $asunto   = $_POST['user_subject'];
        $msg      = $_POST['user_msg'];

        $this->model->insertcontact(['nombre' => $nombre, 'email' => $email, 
        'asunto' => $asunto, 'msg' => $msg]);
        
    }
}

?>