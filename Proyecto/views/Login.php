<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if( isset($_REQUEST['btn']) ) {
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $R_user="user";
        $R_pass="pass";
        if($user=$R_user||$pass=$R_pass) {
            header ('Location: Main.php'); #Redireccion a Main.php luego de hacer login
        }
    } else {
    ?>
    <form action="Login.php" method="post">
        <table width="250">
            <tr> <th colspan="2"><b>LOGIN</b></th> </tr>
            <tr> 
                <td> <p>USER: </p> </td>
                <td> <input name="txtUser" type="text" size="10" maxlength="6"> </td>
            </tr>
            <tr>
                <td> <p>PASSWORD: </p> </td>
                <td> <input name="txtPass" type="password" size="10" maxlength="6"> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="btn">
                    <input type="reset" value="Limpiar" name="btnLimpiar">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>