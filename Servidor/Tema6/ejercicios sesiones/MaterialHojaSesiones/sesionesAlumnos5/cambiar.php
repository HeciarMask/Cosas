<?php
session_start();
if(!isset($_POST['enviar'])){


$idiomaElegido = $_POST["idiomaElegido"];

//si no se ha pulsado enviar pido el nuevo valor de nivel  
	echo "<table><form  method='POST'>";
	echo "<tr><td>Idioma</td><td>"."$idiomaElegido"."</td></tr>";
	echo "<tr><td>Nivel</td><td><input type='text' name='nivel' value=".$_SESSION['niveles'][$idiomaElegido]."></td></tr>";
	echo "<input type='hidden' name='idioma' value=$idiomaElegido>";
	echo "<tr><td colspan='2'><input type='submit' name='enviar' value=enviar></td></tr></form></table>";
// si se ha pulsado enviar actualizo la variable de sesión y vuelvo a la página inicial

}else{
	extract($_POST);
	$_SESSION["niveles"][$idioma] = $nivel;
	header("Location:pag1.php");	
}


?>