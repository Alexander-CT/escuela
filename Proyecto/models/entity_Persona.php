<?php 
class persona{
    private $dni; #PK
    private $nomA;
    private $nomB;
    private $apeP;
    private $apeM;
    private $fechaN;

    public function setDNI($dni){
        $this->dni = $dni;
    }
    public function getDNI(){
        return $this->dni;
    }

    public function setNomA($nomA){
        $this->nomA = $nomA;
    }
    public function getNomA(){
        return $this->nomA;
    }

    public function setNomB($nomB){
        $this->nomB = $nomB;
    }
    public function getNomB(){
        return $this->nomB;
    }

    public function setApeA($apeA){
        $this->apeA = $apeA;
    }
    public function getApeA(){
        return $this->apeA;
    }

    public function setApeB($apeB){
        $this->apeB = $apeB;
    }
    public function getApeB(){
        return $this->apeB;
    }
}
?>