<?php
session_start();

if(!isset($_SESSION['color']))$_SESSION['color'] = "white";

echo "<body style='background-color:".$_SESSION['color']."'>";

if(!isset($_POST['usuario'])){
echo "
<form action='index.php' method='post'>
    <table>
        <tr>
            <td>Identificarse</td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type='text' name='usuario' /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' name='passwd' /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Login' /></td>
        </tr>
    </table>
<form>
";

require_once("funcionesBD.php");
$nombreColumna = "usuario";
$nombreClave = "password";
$nombreTabla = "usuarios";
comprobarUsuario($nombreTabla,$nombreColumna,$nombreClave,$contenidoColumna,$contenidoClave)
}else{
    echo "
    <a href='enlace1.php'>Enlace 1</a><br>
    <a href='enlace2.php'>Enlace 2</a>
    ";
}
?>