<?php
require_once("estudiantes.php");
$miobjeto=new Estudiantes();
$misdatos=$miobjeto->get_estudiantes();
echo "<html><head></head><body>";
echo "<table border='1'>";
	echo "<tr><th>Id</th><th>nombre</th><th>apellido</th><th>especialidad</th><tr>";
for ($i=0;$i<sizeof($misdatos);$i++)
{echo "<tr><td>".$misdatos[$i]["id"]."</td><td>".$misdatos[$i]["nombre"]."</td><td>".$misdatos[$i]["apellido"]."</td><td>".$misdatos[$i]["especialidad"]."</td></tr>";}
echo "</body></html>";
?>
	