<?php
session_start();

if(isset($_POST["terminar"])){
	$conexion = new mysqli("localhost", "root", "", "sesiones");
	$sentencia = $conexion->stmt_init();
	$cad = "INSERT INTO tabla_nombres (id, nombre) VALUES (?,?)";
	$sentencia->prepare($cad);
	$tabla = $_SESSION["nombres"];

	foreach($tabla as $indice => $valor){
		$sentencia->bind_param("is",$indice,$valor);
		$sentencia->execute();
	}
	
	session_destroy();

}else if(isset($_POST["grabar"])){
	if(!isset($_SESSION["nombres"]))$_SESSION["nombres"]= array();
	extract($_POST);
	$_SESSION["nombres"][] = $nombre;
}


echo "<a href=formu2.php>Volver al formulario</a>"	;

echo "<p>Datos grabados en la tabla</p>";

?>
