<header>
 Usuario: <?php echo $_SESSION['usuario']['correo']?>

 <a href="categorias.php">Seguir Comprando</a>
 <a href="carrito.php">Ver carrito</a> 
 <a href="logout.php">Cerrar sesión</a>
  <?php
	if (isset($_SESSION["realizado"])){
	     echo "<p>".$_SESSION["realizado"]."</p>";
		 unset ($_SESSION["realizado"]);}
?>
</header>
<hr>