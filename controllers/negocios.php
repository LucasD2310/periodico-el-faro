<?php

class Negocios extends Controller{

    function __construct(){
        parent::__construct();
        //echo "<p>Nuevo controlador negocios</p>";
        $this->view->render('negocios/index');
        
    }

}

?>