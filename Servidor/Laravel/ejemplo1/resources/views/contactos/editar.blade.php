<html><body>
<h3>Teclee sus datos</h3>
<form method="POST">
@csrf
<p>Nombre:
		<input type="text" name="nombre" value="{{$contactoActual->nombre}}"></p>
<p>Apellido:
		<input type="text" name="apellido" value="{{$contactoActual->apellido}}"></p>
<p>Teléfono:
		<input type="text" name="telefono" value="{{$contactoActual->telefono}}"></p>
<p>Dirección:
		<input type="text" name="direccion" value="{{$contactoActual->direccion}}"></p>		
<input type="submit" name="enviar" value="Envio">

</form>

<a href="/contactos">Volver</a>
</body></html>