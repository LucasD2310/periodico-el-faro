<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('main/index');
    }

    function registrarNuevaNoticia(){
        echo "Noticia ingresada";
        $this->model->insert();
    } 
}

?>