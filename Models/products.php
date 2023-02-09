<?php 

class Products{

    private $id;
    private $emri;
    private $pershkrimi;
    private $cmimi;
    private $foto;

    function __construct($id,$emri,$pershkrimi,$cmimi,$foto){
        $this->id=$id;
        $this->emri=$emri;
        $this->pershkrimi=$pershkrimi;
        $this->cmimi=$cmimi;
        $this->foto=$foto;
    }

    function getId(){
        return $this->id;
    }
    function getEmri(){
        return $this->emri;
    }
    function getPershkrimi(){
        return $this->pershkrimi;
    }
    function getCmimi(){
        return $this->cmimi;
    }
    function getFoto(){
        return $this->foto;
    }
}


?>
