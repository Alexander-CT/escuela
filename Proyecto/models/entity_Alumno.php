<?php 
class Alumno {
    private $id; #pk #dni
    private $FechaIn;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFechaIn($FechaIn){
        $this->id = $id;
    }
    public function getFechaIn(){
        return $this->id;
    }
}
?>