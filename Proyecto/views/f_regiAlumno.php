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
            <iframe id="addframe" style="visibility: hidden;"></iframe>
        </div>
        <div class="Registro">
        
        </div>
    </div>
    <script>
        function myADD() {
            document.getElementById("myframe").css=('visibility','visible');
            document.getElementById("myframe").src = "F_Aliumno_insertar.php";
        }
    </script>
</body>
</html>