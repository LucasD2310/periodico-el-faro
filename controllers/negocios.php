<?php

class Negocios extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
    }

    function render(){
        $noticias = $this->model->getnegocios();
        $this->view->noticias = $noticias;
        $this->view->render('negocios/index');
=======
        //echo "<p>Nuevo controlador negocios</p>";
        $this->view->render('negocios/index');
        
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
    }

}

?>