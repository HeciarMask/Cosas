<html>
<head>
<meta http-equiv='Content-type' content="text/html";charset=utf8>
</head>
<body>
	<h3>Consulta del catastro</h3>
<form action="test.php" method="POST">
	<h4>Seleccione calle</h4>
<p><SELECT name="calle">

<?php 
	foreach($lasCalles as $unaCalle){
		$guarda = $unaCalle->getCalle();
		$muestra= $unaCalle->getNombreZona().",".$unaCalle->getCalle();

		echo "<option value='"..$guarda."'>".$muestra."</option>";

	}
?>

</select></p>
    Seleccione Tipo de vivienda
	<input type='submit' value='Consultar' name='envio'></form>
</body>
</html>