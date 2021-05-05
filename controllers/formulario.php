<?php

class Formulario extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('formulario/index');
    }

    function registrarNuevaNoticia(){
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

}

?>