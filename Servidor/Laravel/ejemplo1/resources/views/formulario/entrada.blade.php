<html><body>
<h3>Teclee sus datos</h3>
<form method="POST">
@csrf
<p>Nombre:
		<input type="text" name="nombre"></p>
<p>Apellido:
		<input type="text" name="apellido"></p>
<p>Edad:
		<input type="text" name="edad"></p>
<input type="submit" name="enviar" value="Envio">

</form>

</body></html>