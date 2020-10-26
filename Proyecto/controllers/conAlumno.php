<?php
include("../models/DAO_alumno.php");
include("../models/entity_Alumno.php");
class conAlumno{
    function registrarProfesor($id,$fi) {
        $obj=new DAO_alumno();
        $objA=new entity_Alumno();
        $objA->setID($id);
        $objA->setFechaIn($fi);
        header("Location: f_regiAlumno.php");
    }

    function consultarProfesor($id){
        $obj=new profesorDAO();
        return $obj->consultarprofesor($id);
    }

    function listaProfesores(){
        $obj=new profesorDAO();
        return $obj->getprofesores();
    }

}
?>