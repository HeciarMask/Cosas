<?php
$c=mysqli_connect ("localhost","root","","ejemplos") or die ("Imposible conectar"); 



$crear="CREATE TABLE IF NOT EXISTS ";
$crear .="ejemplo1 ";
$crear .="( ";
$crear .="num1 TINYINT , ";
$crear .="num2 TINYINT (3) UNSIGNED ZEROFILL,  ";
$crear .="num3 TINYINT (7) UNSIGNED ZEROFILL DEFAULT 13,  ";
$crear .="num4 REAL (8,3) ZEROFILL DEFAULT 3.14,  ";
$crear .="fecha DATE,  ";
$crear .="cadena VARCHAR(32) BINARY,  ";
$crear .="opcion ENUM('Si','No','Quiza')  ";
$crear .=")";

if(mysqli_query($c,$crear)){
	print "Se ha creado la tabla<br>";
}else{
    print "Se ha producido un error al crear la tabla";
	 }
?>
