<?php
include('funciones_fecha.php');
cabecera('Control de PHP');
	echo "<div id=\"contenido\">\n";
	echo "<form id=\"form_seleccion\" action=\"meter_horas.php\" method=\"post\">";
	echo "Introducir la fecha";
	$fecha=date("Y-m-d");;
	$dd=date ("j", strtotime($fecha));
	$mm=date ("n", strtotime($fecha));
	$yy=date ("Y", strtotime($fecha));
	echo "<input type=\"text\" name=dia size='2' value=$dd>";
	echo "<input type=\"text\" name=mes size='2' value=$mm>";
	echo "<input type=\"text\" name=anno size='4' value=$yy>";
	
	echo "<br>Departamento:";
	echo "<select name=\"departamento\">";

	$conexion = new mysqli("localhost","root","","preparadas");
	$conexion->set_charset("utf8");
	$sqlPet = "SELECT DISTINCT departamento FROM trabajadores";
	$resultado = $conexion->query($sqlPet);

	while($fila = $resultado->fetch_assoc()){
		$valor = $fila["departamento"];
		echo "<option value=\"$valor\" >$valor</option>";
	}
	echo "</select>";
	
	echo "<br><br><input type=submit value='Introducir empleados' name='enviar'></form>";
	echo "</div>";
	pie();
?>
