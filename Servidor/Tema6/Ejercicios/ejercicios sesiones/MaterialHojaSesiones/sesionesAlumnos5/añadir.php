<?php
//añade los datos a la variable de sesión
session_start();
extract($_POST);

$_SESSION["niveles"][$idioma] = $nivel;

header("Location:pag1.php");
?>