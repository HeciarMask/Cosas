<?php
if (isset($_COOKIE['visitante']))
	$numero=$_COOKIE['visitante'];
else 
	$numero=0;
$numero+=1; 
setcookie("visitante",$numero,time()+86400); 

if($numero==1){print "Es la primera vez que visitas esta página";} 
if($numero>1){print "Es la $numero ª vez  que visitas esta página";} 
?> 
