<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
        $this->view->noticias = [];
    }

    function render(){
        $noticias = $this->model->get();
        $this->view->noticias = $noticias;
        $this->view->render('main/index');
    }

=======
        $this->view->render('main/index');
    }

    function registrarNuevaNoticia(){
        echo "Noticia ingresada";
        $this->model->insert();
    } 
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
}

?>