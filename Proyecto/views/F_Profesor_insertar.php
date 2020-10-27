<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/Profesor_insertar.css" />
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
    <form class="formP form_grid" method="post" action="frmInsertar.php">
        <div class="grids">
            <label for="dni" >DNI: </label><input type="text" name="dni"/>
        </div>
        <div class="grids">
            <label for="nomA" >Nombre 1: </label><input type="text" name="nomA"/> 
        </div>
        <div class="grids">
            <label for="nomB" >Nombre 2: </label><input type="text" name="nomB"/>
        </div>
        <div class="grids">
            <label for="apeP" >Ap.Paterno: </label><input type="text" name="apeP"/>
        </div>
        <div class="grids">
            <label for="apeM" >Ap.Materno: </label><input type="text" name="apeM"/>
        </div>
        <div class="grids">
            <label for="fn" >Fecha Nacimiento: </label><input type="text" name="fn"/>
        </div>
        <div class="grids">
            <label for="fi">Fecha Contratacion: </label><input type="text" name="fi"/>
        </div>
        <input type="submit" name="btnRegistrar" value="Registrar"/>
    </form>
<?php
}
?>
</body>
</html>