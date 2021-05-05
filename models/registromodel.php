<?php

class RegistroModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insertuser($datos){
        
        try{
            $query = $this->db->connect()->prepare('INSERT INTO USUARIOS (EMAIL, NOMBRE) 
            VALUES (:email, :nombre)');
            $query->execute(['email' => $datos['email'], 'nombre' => $datos['nombre']]);
            return true;
            
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo "Email Previamente Registrado. Intente con uno Nuevo";
            return false;
        }
        
    }
}

?>