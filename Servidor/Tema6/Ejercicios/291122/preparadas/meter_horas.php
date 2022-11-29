<?php
include('funciones_fecha.php');
cabecera('Control de PHP');
echo "<div id=\"contenido\">";
echo "<h1>Introducir Horas</h1>";
/* no tocar estas dos lineas, así tendréis en la variable $lafecha la fecha lista para insertarla como un string en mysql*/ 
$lafecha=date ("Y-m-d", mktime (0, 0, 0, $_POST['mes'],$_POST['dia'],$_POST['anno']));
$dep = $_POST["departamento"];
echo "<p>$lafecha, $dep</p>"; 
////////////////////////////////
echo "<table align=center border=2 bgcolor='#F0FFFF'>"; 
    echo "<tr bgcolor='#ffffff'><td colspan=2 align=center>Para los trabajadores que han realizado horas extra rellena el cuadro correspondiente </td><tr bgcolor='#ffffff'>"; 
    echo "<td align=center>Nombre del trabajador</td>"; 
    echo "<td align=center>Horas</td>"; 
	
	echo "<form name='modificar' method=post action='actualizar_tabla.php' >"; 

	$conexion = new mysqli("localhost","root","","preparadas");
	$sqlPet1 = "SELECT DISTINCT id_trabajador FROM horas_extra WHERE NOT fecha='$lafecha'";
	$resultado1 = $conexion->query($sqlPet1);

	while($fila = $resultado->fetch_assoc()){
		$id = $fila["id_trabajador"];
		echo "<option value=\"$valor\" >$valor</option>";
	}
	
			echo "<tr><td>". "--------"."</td>";
			echo "<td align=center> <input type=text name= value='0' size='2'></td></tr>"; 
			

		echo "</table>";


echo "<center><input type=submit value='Enviar' name='anadir'></center></form>";

echo "</div>";
pie();
?>

