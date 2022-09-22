<?php
echo  $_POST['nombre'],"<br>";
echo  $_POST['clave'],"<br>";
echo  $_POST['color'],"<br>";
/*
Los valores de los checkbox los capturas solamente si están checado, es decir solamente si el usuario marco el checkbox, 
vendrá en $_POST['nombre_del_checkbox']. Para controlar si lo chequeó se podria usar algo así: (hay mejores formas)
*/
if (isset($_REQUEST['acondicionado'])){
	echo  $_POST['acondicionado'],"<br>";}

if(isset($_POST['acondicionado'])){
	echo  $_POST['acondicionado'],"<br>";}

if(isset($_POST['tapiceria'])){
	echo $_POST['tapiceria'],"<br>";}

echo  $_POST['llantas'],"<br>";
echo  $_POST['precio'],"<br>";
echo  $_POST['texto'],"<br>";
echo  $_POST['oculto'],"<br>";
?>