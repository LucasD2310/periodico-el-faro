<?php

class Formulario extends Controller{

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
        $this->view->render('formulario/index');
    }

    function registrarNuevaNoticia(){
<<<<<<< HEAD
        $titulo         = $_POST['title'];
        $categoria      = $_POST['category'];
        $noticia        = $_POST['article'];

        $archivoimagen  = $_FILES['archivoimagen']['name'];
        $tipoimagen     = $_FILES['archivoimagen']['type'];
        $tamanoimagen   = $_FILES['archivoimagen']['size'];

        $archivoaudio   = $_FILES['archivoaudio']['name'];
        $tipoaudio      = $_FILES['archivoaudio']['type'];
        $tamanoaudio    = $_FILES['archivoaudio']['size'];

        $archivovideo   = $_FILES['archivovideo']['name'];
        $tipovideo      = $_FILES['archivovideo']['type'];
        $tamanovideo    = $_FILES['archivovideo']['size'];

        $seccion        = $_POST['menu'];

        $carpetaimagen  = $_SERVER['DOCUMENT_ROOT'] . '/PeriodicoElFaro/periodico-el-faro/views/img/';
        $carpetavideo   = $_SERVER['DOCUMENT_ROOT'] . '/PeriodicoElFaro/periodico-el-faro/views/video/';
        $carpetaaudio   = $_SERVER['DOCUMENT_ROOT'] . '/PeriodicoElFaro/periodico-el-faro/views/audio/';

       
        $mensaje = "";
        $error = false;

        //$mensaje = $tipoaudio;

        if($tamanoimagen>0){
            if($tipoimagen!="image/jpeg" and $tipoimagen!="image/jpg" and $tipoimagen!="image/png" and $tipoimagen!="image/gif"){
                $mensaje = "Se acepta imagen de tipo .jpeg, .jpg, .png, .gif";
                $error=true;
            }
        }

        if($tamanoaudio>0){
            if($tipoaudio!="audio/mp3" and $tipoaudio!="audio/mpeg"){
                $mensaje = "Se acepta audio de tipo .mp3";
                $error=true;
            }
        }

        if($tamanovideo>0){
            if($tipovideo!="video/mp4"){
                $mensaje = "Se acepta video de tipo .mp4";
                $error=true;
            }
        }

        if($error==false){

            if($tamanoimagen>0){
                move_uploaded_file($_FILES['archivoimagen']['tmp_name'], $carpetaimagen.$archivoimagen);
            }

            if($tamanoaudio>0){
                move_uploaded_file($_FILES['archivoaudio']['tmp_name'], $carpetaaudio.$archivoaudio);
            }

            if($tamanovideo>0){
                move_uploaded_file($_FILES['archivovideo']['tmp_name'], $carpetavideo.$archivovideo);
            }

            if($this->model->insertnew(['titulo' => $titulo, 'categoria' => $categoria, 'noticia' => $noticia, 'archivoimagen' => $archivoimagen, 'archivoaudio' => $archivoaudio, 'archivovideo' => $archivovideo, 'seccion' => $seccion])){
                $mensaje = "Noticia Registrada Correctamente";
            }else{
                $mensaje = "Error en Registro. Intente nuevamente";
            }

=======
<<<<<<< HEAD
        $titulo         = $_POST['title'];
        $categoria      = $_POST['category'];
        $noticia        = $_POST['article'];
        $archivoimagen  = $_POST['archivoimagen'];
        $archivoaudio   = $_POST['archivoaudio'];
        $archivovideo   = $_POST['archivovideo'];
        $seccion        = $_POST['menu'];
       
        $mensaje = "";
        //$mensaje = $seccion;

        if($this->model->insertnew(['titulo' => $titulo, 'categoria' => $categoria, 'noticia' => $noticia, 'archivoimagen' => $archivoimagen, 'archivoaudio' => $archivoaudio, 'archivovideo' => $archivovideo, 'seccion' => $seccion])){
            $mensaje = "Noticia Registrada Correctamente";
        }else{
            $mensaje = "Error en Registro. Intente nuevamente";
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }

<<<<<<< HEAD
=======
=======
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
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
}

?>