<?php
include("../models/DAO_persona.php");
include("../models/entity_Persona.php");
class conPersona{
    function registrarProfesor($dni,$nomA,$nomB,$apeP,$fn){
        $obj=new DAO_persona();
        $objP=new entity_Persona();
        $objP->setDNI($dni);
        $objP->setNomA($nomA);
        $objP->setNomB($nomB);
        $objP->setApeP($apeP);
        $objP->setApeM($apeM);
        $objP->setFechaN($fn);
        $obj->insertar($objP);
        header("Location: f_regiAlumno.php");
    }

    function consultarProfesor($idC){
        $obj=new profesorDAO();
        return $obj->consultarprofesor($idC);
    }
    function listaProfesores(){
        $obj=new profesorDAO();
        return $obj->getprofesores();
    }

}
?>