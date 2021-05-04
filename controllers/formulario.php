<?php

class Formulario extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('formulario/index');
    }

    function registrarNuevaNoticia(){
        $title          = $_POST['title'];
        $category       = $_POST['category'];
        $article        = $_POST['article'];
        $archivoimagen  = $_POST['archivoimagen'];
        $archivoaudio   = $_POST['archivoaudio'];
        $archivovideo   = $_POST['archivovideo'];

        echo $archivoimagen;

        //$this->model->insertcontact(['nombre' => $nombre, 'email' => $email, 
        //'asunto' => $asunto, 'msg' => $msg]);
    }
}

?>