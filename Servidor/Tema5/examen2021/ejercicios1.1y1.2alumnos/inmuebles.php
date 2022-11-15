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
    
?>
</td></tr>

<tr><td>Localidad:</td><td>
Localidades </td></tr>

<tr><td>Precio entre</td><td> <input type="text" name="minimo" /> y <input type="text" name="maximo"  /></td></tr>
<tr><td>Ordenar precios </td><td><input type="radio" name="orden" checked value="1">Ascendente<input type="radio" name="orden" value="2">Descendente</td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Buscar" /></td></tr>

</table>
</form>


</body>
</html>