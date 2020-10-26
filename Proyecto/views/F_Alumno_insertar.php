<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar profesor</title>
</head>
<body>
<?php
include ("../controllers/conPersona.php"); 
include ("../controllers/conAlumno.php");  
if(isset($_POST['btnRegistrar'])){ //Registrar        
    $dni =$_POST['dni'];
    $nomA=$_POST['nomA'];
    $nomB=$_POST['nomB'];
    $apeP=$_POST['apeP'];
    $apeM=$_POST['apeM'];
    $fn=$_POST['fn'];
    $fi=$_POST['fi'];
    $objP = new conPersona();
    $objA = new conAlumno();
    $objP->registrar($dni,$nomA,$nomB,$apeP,$apeM,$fn);
    $objA->registrar($dni,$fi);
}else {
?>
    <form method="post" action="frmInsertar.php">
        DNI               : <input type="text" name="dni"/>
        Nombre 1          : <input type="text" name="nomA"/>
        Nombre 2          : <input type="text" name="nomB"/>
        Ap.Paterno        : <input type="text" name="apeP"/>
        Ap.Materno        : <input type="text" name="apeM"/>
        Fecha Nacimiento  : <input type="text" name="fn"/>

        Fecha Inscripción  : <input type="text" name="fi"/>
        <input type="submit" name="btnRegistrar" value="Registrar"/>
    </form>
<?php
}
?>
</body>
</html>