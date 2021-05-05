<?php

include_once 'models/noticia.php';

class NegociosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getnegocios(){
        $items = []; 

        try{
            $query = $this->db->connect()->query("SELECT SECCION,TITULO,CATEGORIA,NOTICIA,ARCHIVOIMAGEN,ARCHIVOVIDEO,ARCHIVOAUDIO FROM NOTICIAS WHERE SECCION=3");

            while($row = $query->fetch()){
                $item = new Noticia();
                $item->seccion     = $row['SECCION'];
                $item->titulo      = $row['TITULO'];
                $item->categoria   = $row['CATEGORIA'];
                $item->noticia     = $row['NOTICIA'];
                $item->imagen      = $row['ARCHIVOIMAGEN'];
                $item->video       = $row['ARCHIVOVIDEO'];
                $item->audio       = $row['ARCHIVOAUDIO'];
                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return[];
        }

    }
}

?>