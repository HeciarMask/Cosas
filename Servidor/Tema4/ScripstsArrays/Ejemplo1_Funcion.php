<html>
<head>
<meta charset="utf-8">
<title>Ejemplo 1 funciones</title>
</head>
<?php

	$a=5; 
	$b=47;

	a1();

	a2();

	a3();

	echo "El valor de $a HA CAMBIADO despues de ejecutar a3 es: ",$a,"<br>";
	echo "El valor de $b NO HA CAMBIADO despues de ejecutar a3 es: ",$b,"<br>";

	a4();





#declaración de funciones.

function a1(){
	echo "Este es el valor de " .'$a'. " en la función a1: ",$a,"<br>";
	echo "Este es el valor de " .'$b'. " en la función a1: ",$b,"<br>";
}


function a2(){
	global $a;
        echo "Este es el valor de " .'$a'." en la función a2: ",$a,"<br>";
	echo "Este es el valor de ".'$b'."  en la función a2: ",$b,"<br>";
}


function a3(){
	global $a;
	$a +=45;                       
	$b -=348;                       
	echo "Este es nuevo valor de ".'$a'." en la función a3: ",$a,"<br>";
	echo "Este es el valor de ".'$b'." en la función:a3 ",$b,"<br>";
}

function a4(){
	print "La superglobales si están en ámbito: ".$_SERVER['SERVER_NAME']."<br>";
}

?>