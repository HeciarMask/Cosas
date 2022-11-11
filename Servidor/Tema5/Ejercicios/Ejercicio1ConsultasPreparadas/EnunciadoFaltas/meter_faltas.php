<?php
include('funciones.php');
cabecera('Marcar los que han faltado');
echo "<div id=\"contenido\">";
$curso=$_POST['curso'];
echo "<h1>Introducir Faltas.</h1>";
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


echo "<input type=\"submit\" value=\"enviar\"></form>";
echo "</div>";
pie();
?>

