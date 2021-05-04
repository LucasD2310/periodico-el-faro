<?php

class ContactoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insertcontact($datos){
        
        $query = $this->db->connect()->prepare('INSERT INTO CONTACTO (NOMBRECONTACTO, EMAILCONTACTO, ASUNTOCONTACTO, MENSAJECONTACTO) VALUES (:nombre, :email, :asunto, :msg)');
        $query->execute(['nombre' => $datos['nombre'], 'email' => $datos['email'], 
        'asunto' => $datos['asunto'], 'msg' => $datos['msg'] ]);
        
    }
}

?>