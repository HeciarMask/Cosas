<!-- inmuebles.php -->
<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<html>
<head>
<title> Gestión de Inmuebles </title>
</head>
<body>
<h1>Inmobiliaria</h1>
<form action="listado.php" method="post">
<p>Mostrar los inmuebles a la venta:
<table  cellpadding="10" cellspacing="8"><tr><td>
Tipo de vivienda:</td><td>
    
<!-- <input type="checkbox" name="tipo" value="indice">Valor</input> -->
<?php
    $dwes=new mysqli("localhost","root","","ejercicio1");
    $sql1="SELECT nombre, id FROM tipos_vivienda";
    $resultado1=$dwes->query($sql1);
    while ($fila1=$resultado1->fetch_assoc())
    {
        $valor1=$fila1["nombre"];
        $ind1 = $fila1["id"];
        echo "<input type=\"checkbox\" name=\"tipo[]\" value=\"$ind1\">$valor1<br>";
    }
?>
</td></tr>

<tr><td>Localidad:</td><td>
<select name="localidad">
<option value="todos">Todos</option>
<?php

 $sql2="SELECT nombre, id FROM localidades";
 $resultado2=$dwes->query($sql2);
 while ($fila2=$resultado2->fetch_assoc())
 {
     $valor2=$fila2["nombre"];
     $ind2= $fila2["id"];
     echo "<option value=\"$ind2\">$valor2</option>";
 }
?>
</select>
</td></tr>
<?php
 $min = 9999999999;
 $max = 0;
 $sql3="SELECT MAX(precio) AS maxi, MIN(precio) AS mini FROM propiedades";
 $resultado3=$dwes->query($sql3);
 $fila3=$resultado3->fetch_assoc();
 $min = $fila3["mini"];
 $max = $fila3["maxi"];     

echo "<tr><td>Precio entre</td><td> <input type=\"text\" name=\"minimo\" value=\"$min\"/> y
<input type=\"text\" name=\"maximo\" value=\"$max\"/></td></tr>";
$dwes->close();
?>


<tr><td>Ordenar precios </td><td><input type="radio" name="orden" checked value="1">Ascendente<input type="radio" name="orden" value="2">Descendente</td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Buscar" /></td></tr>

</table>
</form>


</body>
</html>