<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 2</title>        
       
    </head>
    <body>
	<h3 >Datos del departamento</h3>
<?php

 echo '<table >';    
 echo '<tr>';
 echo "<td>Número: </td><td>"."codigo"."</td>";
 echo '</tr>';
 echo '<tr>';
 echo "<td>Nombre: </td><td>"."nombre"."</td>";
 echo '</tr>';
 echo '<tr>';
 echo "<td>Clase: </td><td>"."clase"."</td>";
 echo '</tr>';
 echo '<tr>';
 echo "<td>Presupuesto: </td><td>"."presupuesto"."</td>";
 echo '</tr>';
 echo '</table>';
echo "<a href='..\Controller\consultar_empleados.php'>Otra consulta</a>";
?>