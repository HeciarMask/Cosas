<?php
session_start();
if(!isset($_POST["opcion"])) header("location:pag1.php");



if($_POST["opcion"] == 1){
	echo "si se seleccionó añadir<br>";
	echo "<table><form action='añadir.php' method='POST'>";
	echo "<tr><td>Idioma</td><td><input type='text' name='idioma'></td></tr>";
	echo "<tr><td>Nivel</td><td><input type='text' name='nivel'></td></tr>";
	echo "<tr><td colspan='2'><input type='submit' name='boton' value=Envío></td></tr></form></table>";
}else{
	echo "si se selecionó cambiar<br>";
	echo "<table><form action='cambiar.php' method='POST'>";
	echo "<tr><td>Seleccione idioma</td><td><select name='idiomaElegido'>";
	foreach($_SESSION["niveles"] as $idioma => $nivel){
		echo "<option value=$idioma>$idioma</option>";
	}
	echo "</select></td></tr>";
	echo "<tr><td colspan='2'><input type='submit' name='boton' value=Envío></td></tr></form></table>";
}
?>