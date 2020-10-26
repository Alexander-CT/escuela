<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main_frm.css" />
    <title>Document</title>
</head>
<body>
    <div class="dashboard">
        <div class="menu">
            <h1>MENU</h1>
            <ul>
                <li><a onclick ="myIni()">Home</a></li>
                <li><a onclick="myRegiA()">Inscribir Alumno</a></li>
                <li><a onclick="myRegiP()">Inscribir Profesor</a></li>
            </ul>
        </div>
        <div class="main_area">
            <iframe id="myframe" src="f_ini.php"></iframe>
        </div>
    </div>
    
    
    <script>
    function myIni() {
        document.getElementById("myframe").src = "http://placekitten.com/g/400/350";
    }
    function myRegiA() {
        document.getElementById("myframe").src = "f_regiAlumno.php";
    }
    function myRegiP() {
        document.getElementById("myframe").src = "f_regiProfesor.php";
    }
    </script>
</body>

</html>