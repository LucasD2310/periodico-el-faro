<?php

class Deportes extends Controller{

    function __construct(){
<<<<<<< HEAD
        parent::__construct();        
    }

    function render(){
        $noticias = $this->model->getdeportes();
        $this->view->noticias = $noticias;
        $this->view->render('deportes/index');
=======
        parent::__construct();
        //echo "<p>Nuevo controlador deportes</p>";
        $this->view->render('deportes/index');
        
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
    }

}

?>