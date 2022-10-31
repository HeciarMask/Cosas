<?php
include('funciones.php');
cabecera('Resultado operación');
$conexion=mysqli_connect("localhost","root","","ejercicio6");
mysqli_set_charset($conexion,"utf8");
echo "<div id=\"contenido\">\n";
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
extract($_POST);
if (!is_numeric($precio))
	die ("El precio debe ser numérico");
elseif ($precio<=0)
	die ("el precio ha de ser >=0");
$sqlComprueba = "SELECT precio FROM precios p WHERE p.super='$supermercado'";
$sqlComprueba.=" AND p.cod_art='$articulo'";
$resultado=mysqli_query($conexion,$sqlComprueba);
$numeroFilas=mysqli_num_rows($resultado);	
if ($numeroFilas==0){
	$instruccionDML="INSERT INTO precios VALUES(";
	$instruccionDML.="'".$supermercado."','".$articulo."',".$precio.")";
	$mensaje="Precio nuevo añadido";
}
else{
	$instruccionDML="UPDATE precios SET precio=".$precio;
	$instruccionDML.=" WHERE super='".$supermercado."'";
	$instruccionDML.=" AND cod_art='".$articulo."'";
	$mensaje="Precio Actualizado";
}
if (mysqli_query($conexion,$instruccionDML))
	echo $mensaje;
else
	echo "error";
echo "</div>";

pie();
?>




