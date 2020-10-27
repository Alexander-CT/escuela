<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registrarAlumno_frm.css" />
    <title>Document</title>
</head>
<body>
    <div class="dashboard">
        <div class="upperbar">
            <h1>ALUMNOS</h1>
        </div>
        <div class="newAlumno"> 
            <ul><li><a onclick="myADD()">ADD</a></li></ul>
            <?php
            $addf = 'addframe';
            foreach($array_expression as $key => $value){
                echo "<iframe id='${addf}'></iframe>";
            }
            ?>
        </div>
        <div class="Registro">
            <iframe id="regframe" src="F_Alumno_Lista.php" width="100%" height="100%"></iframe>
        </div>
    </div>
    <script>
        function myADD() {
            document.getElementById("addframe").src = "F_Alumno_insertar.php";
            //document.getElementById("addframe").style.css('height','500px');
            //text cat http://placekitten.com/g/400/350
        }
    </script>
</body>
</html>