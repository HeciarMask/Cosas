<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lineas</title>
        <link href="examen.css" rel="stylesheet" type="text/css">
    </head>
	<body>
     <div id="encabezado">

<?php 
session_start();
require_once("funcionesBD.php");
$conexion=new mysqli('localhost', 'root', '', 'parte2');
$conexion->set_charset("utf8");
	
if (!isset($_SESSION['contador']))
	$_SESSION['contador']=1;
else 
	$_SESSION['contador']++;
//var_dump($_SESSION);
$numeroveces=$_SESSION['contador'];


echo '<h1>Seleccione la línea.Consulta nº'. $numeroveces.' </h1></div>
<div id="contenido">
<form id="form_listado" action="parte2.php" method="post">
<b>Linea: <br></b>';
$lineas=obtenerArrayOpciones("lineas","cod_linea","desc_linea");
pintarRadio($lineas,"codigolinea");			
?>
<input type="submit" value="Mostrar" name="enviar"/>
</form>
</div>
</body>
</html>