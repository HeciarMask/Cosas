<html><body>
<h3>Teclee sus datos</h3>
<form method="POST">
@csrf
<p>Nombre:
		<input type="text" name="nombre"></p>
<p>Apellido:
		<input type="text" name="apellido"></p>
<p>Teléfono:
		<input type="text" name="telefono"></p>
<p>Dirección:
		<input type="text" name="direccion"></p>		
<input type="submit" name="enviar" value="Envio">

</form>

</body></html>