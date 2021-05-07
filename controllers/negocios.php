<?php

class Negocios extends Controller{

    function __construct(){
        parent::__construct();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
    }

    function render(){
        $noticias = $this->model->getnegocios();
        $this->view->noticias = $noticias;
        $this->view->render('negocios/index');
<<<<<<< HEAD
=======
=======
        //echo "<p>Nuevo controlador negocios</p>";
        $this->view->render('negocios/index');
        
>>>>>>> 066b77fa4d939a1c9c9a7b4e1949cd75ba7cd86e
>>>>>>> a3a58b7eb88a153cf804880767fc8e09371f9ccb
    }

}

?>