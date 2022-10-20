<?php
/*
Según la información que figura en la tabla stock de la base de datos dwes, la tienda 1
(CENTRAL) tiene 2 unidades del producto de código 3DSNG y la tienda 3 (SUCURSAL2)
ninguno. Suponiendo que los datos son esos (no hace falta que los compruebes en el
código), utiliza una transacción para mover una unidad de ese producto de la tienda 1 a la
tienda 3.
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : Trabajar con bases de datos en PHP -->
<!-- Ejercicio: Transacción con MySQLi -->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ejercicio: Transacción con MySQLi</title>
</head>
<body>
<?php
@$dwes = new mysqli("localhost", "root", "", "dwes");
$error = $dwes->connect_errno;
if ($error != null) {
print "<p>Se ha producido el error: $dwes->connect_error.</p>";
exit();
}
// Definimos una variable para comprobar la ejecución de las consultas
$todo_bien = true;
// Iniciamos la transacción
$dwes->autocommit(false);
$sql = 'UPDATE stock SET unidades=1 WHERE producto="3DSNG" AND tienda=1';
if ($dwes->query($sql) != true) 
	$todo_bien = false;
$sql = 'INSERT INTO `stock` (`producto`, `tienda`, `unidades`) VALUES ("3DSNG", 3,
1)';
if ($dwes->query($sql) != true) 
$todo_bien = false;
// Si todo fue bien, confirmamos los cambios
//  y en caso contrario los deshacemos
if ($todo_bien == true) {
$dwes->commit();
print "<p>Los cambios se han realizado correctamente.</p>";
}else {
$dwes->rollback();
print "<p>No se han podido realizar los cambios.</p>";
}
$dwes->close();
unset($dwes);
?>
</body>
</html>
