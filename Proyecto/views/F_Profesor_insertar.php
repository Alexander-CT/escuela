<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/componentes.css" />
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
        <label class="fila" id="lbl_dni" for="dni" >DNI: </label>
        <input class="input_txt" id="input_dni" type="text" name="dni"/>

        <label class="fila" id="lbl_nomA" for="nomA" >Nombre 1: </label>
        <input class="input_txt" id="input_nomA" type="text" name="nomA"/>

        <label class="fila" id="lbl_nomB" for="nomB" >Nombre 2: </label>
        <input class="input_txt" id="input_nomB" type="text" name="nomB"/>

        <label class="fila" id="lbl_apeP" for="apeP" >Ap. Paterno: </label>
        <input class="input_txt" id="input_apeP" type="text" name="apeP"/>

        <label class="fila" id="lbl_apeM" for="apeM" >Ap. Materno: </label>
        <input class="input_txt" id="input_apeM" type="text" name="apeM"/>

        <label class="fila" id="lbl_fn" for="fn" >Fecha Nacimiento: </label>
        <input class="input_txt" id="input_fn" type="text" name="fn"/>

        <label class="fila" id="lbl_fi" for="fi">Fecha Contratacion: </label>
        <input class="input_txt" id="input_fi" type="text" name="fi"/>

        <button id="btnRegistrar" class="btn_estilo1" name="btnRegistrar">Registrar</button>
        <!-- <input type="submit" name="btnRegistrar" value="Registrar"/> -->
    </form>
<?php
}
?>
</body>
</html>