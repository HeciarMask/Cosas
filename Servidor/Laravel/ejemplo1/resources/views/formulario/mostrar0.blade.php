<?php 
echo "<pre>";
print_r($losDatos);
echo "</pre>";
?>
<html><body>
<h3>Estos son sus  datos</h3>
<table>
<tr><td>Nombre:</td><td>{{$losDatos["nombre"]}}</td></tr>
<tr><td>Apellido:</td><td>{{$losDatos["apellido"]}}</td></tr>
<tr><td>Edad:</td><td>{{$losDatos["edad"]}}</td></tr>
</table>
</body></html>