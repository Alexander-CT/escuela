<?php
include_once 'conexion.php';
class cursoDAO {
    public function __construct() {
        $con = new conexion();
    }

    function getPersonas(){
        try {
            $obj = Conexion::singleton();
            $data = $obj->prepare('CALL usp_get_personas()'); #consigue todas las personas
            $data->execute();
            $lista = $data->fetchAll();
            return $lista;
        }catch (Exception $e) {
            throw $e;
        }
    }

    function consultarPersona($dni){
        try {
            $obj = Conexion::singleton();
            $data = $obj->prepare('CALL usp_consultar_persona(?)'); #Consigue la persona de DNI ...
            $data->bindParam(1, $dni);
            $data->execute();
            $lista = $data->fetchAll();
            return $lista;
        }catch (Exception $e) {
            throw $e;
        }
    }

    function insertar($objP){
        try {
            $obj = Conexion::singleton();
            $data = $obj->prepare('CALL usp_insertar_persona(?,?,?,?,?,?)'); #Querry insertar
            $data->bindParam(1, $objP->getDNI());
            $data->bindParam(2, $objP->getNomA());
            $data->bindParam(3, $objP->getNomB());
            $data->bindParam(4, $objP->getApeP());
            $data->bindParam(5, $objP->getApeM());
            $data->bindParam(6, $objP->getFechaN());
            $data->execute();                                       
        }catch (Exception $e) {
            throw $e->getMessage();
        }
    }

}
?>