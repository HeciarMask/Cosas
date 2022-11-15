<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<html>
<head>
<title> Gestión de Inmuebles </title>
</head>
<body>
<h1>Inmobiliaria</h1>
<form action="GrabarVenta.php" method="post">
<p>Introducir venta:
<table  cellpadding="10" cellspacing="8"><tr><td>
Vivienda:</td><td></td></tr>
<tr><td>Cliente:</td><td>

</td></tr>
<tr><td>Precio de venta</td><td> <input type="text" name="precio"  /></td></tr>
<tr><td></td><td><input type="submit" name="muestra" value="Venta" /></td></tr>
</table>
</form>
</body>
</html>