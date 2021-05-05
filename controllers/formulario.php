<?php

class Formulario extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
        $this->view->mensaje = "";
    }

    function render(){
=======
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
        $this->view->render('formulario/index');
    }

    function registrarNuevaNoticia(){
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
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }

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
}

?>