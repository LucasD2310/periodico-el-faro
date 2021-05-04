<?php

class Deportes extends Controller{

    function __construct(){
        parent::__construct();
        //echo "<p>Nuevo controlador deportes</p>";
        $this->view->render('deportes/index');
        
    }

}

?>