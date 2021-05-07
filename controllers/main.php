<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
        $this->view->noticias = [];
    }

    function render(){
        $noticias = $this->model->get();
        $this->view->noticias = $noticias;
<<<<<<< HEAD
        $this->view->render('/main/index');
    }

=======
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
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
}

?>