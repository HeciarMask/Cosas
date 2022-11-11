<?php
include('funciones.php');
cabecera('Marcar los que han faltado');
echo "<div id=\"contenido\">";
$curso=$_POST['curso'];
echo "<h1>Introducir Faltas. Curso: $curso</h1>";
echo "<form name='modificar' method=post action='scriptinsercion.php'>"; 
/* guarda dia mes año de la fecha actual en tres variables */
echo "Introducir la fecha";
$fecha=date("Y-m-d");;
$dd= date ("j", strtotime($fecha));
$mm=date ("n", strtotime($fecha));
$yy=date ("Y", strtotime($fecha));

echo "<input type=\"text\" name=dia size='2' value=$dd>";
echo "<input type=\"text\" name=mes size='2' value=$mm>";
echo "<input type=\"text\" name=anno size='4' value=$yy><br>";

$dwes=new mysqli("localhost","root","","examen2");
$sql="SELECT CLAVE,NOMBRE FROM alumnos WHERE  CURSO='".$curso."' ORDER BY curso";
$resultado=$dwes->query($sql);
while ($fila=$resultado->fetch_assoc())
{
	$clave=$fila["CLAVE"];
	echo "<input type=\"checkbox\" name=inserta[$clave] value=\"Si\">".$fila["NOMBRE"]."<br>";
}
echo "<input type=\"submit\" value=\"enviar\"></form>";
echo "</div>";
pie();
?>

