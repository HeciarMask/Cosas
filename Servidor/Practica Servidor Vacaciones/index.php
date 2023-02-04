<?php
require_once 'bd.php';


if (isset($_POST["usuario"])) {

	$usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
	if ($usu === false) {
		$err = true;
		$usuario = $_POST['usuario'];
	} else {
		session_start();
		$_SESSION['usuario'] = $usu['NUM_CLIENTE'];
		$_SESSION['correo'] = $usu['EMAIL'];
		$_SESSION['carrito'] = [];
		//Si el NUM_CLIENTE es igual a "1" quiere decir que esta haciendo login el administrador
		if ($_SESSION['usuario'] == 1)	header("Location: admin.php");
		else	header("Location: categorias.php");

		return;
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Formulario de login</title>
	<meta charset="UTF-8">
</head>

<body>
	<?php if (isset($_GET["redirigido"])) {
		echo "<p>Haga login para continuar</p>";
	} ?>
	<?php if (isset($err) and $err == true) {
		echo "<p> Revise usuario y contraseña</p>";
	} ?>
	<form action="index.php" method="POST">
		<label for="usuario">Usuario</label>
		<input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text">
		<label for="clave">Clave</label>
		<input id="clave" name="clave" type="password">
		<input type="submit" value="Enviar">
	</form>
</body>

</html>