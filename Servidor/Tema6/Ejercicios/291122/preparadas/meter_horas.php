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
	$conexion->set_charset("utf8");
	$sqlPet1 = "SELECT DISTINCT nombre, CLAVE FROM trabajadores WHERE departamento=\"$dep\" AND CLAVE NOT IN";
	$sqlPet1 .= "(SELECT id_trabajador FROM horas_extra WHERE fecha=\"$lafecha\")";
	$resultado1 = $conexion->query($sqlPet1);

	while($fila1 = $resultado1->fetch_assoc()){
		$id = $fila1["CLAVE"];
		$nombre = $fila1["nombre"];
		echo "<tr><td>".$nombre."</td>";
		echo "<td align=center> <input type=text name='extra[$lafecha][$id]' value='0' size='2'></td></tr>"; 
	}
	
			

		echo "</table>";


echo "<center><input type=submit value='Enviar' name='anadir'></center></form>";

echo "</div>";
pie();
?>

