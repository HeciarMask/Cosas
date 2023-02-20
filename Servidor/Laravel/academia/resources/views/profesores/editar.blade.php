<html><body>
<h3>Editar Profesor</h3>
<form method="POST">
@csrf
<p>Nombre:
		<input type="text" name="nombre_apellido" value="{{$profesor->nombre_apellido}}"></p>
<p>Grado Academico:
		<input type="text" name="grado_academico" value="{{$profesor->grado_academico}}"></p>
<p>Teléfono:
		<input type="text" name="telefono" value="{{$profesor->telefono}}"></p>
<p>Profesión:
		<input type="text" name="profesion" value="{{$profesor->profesion}}"></p>		
<input type="submit" name="enviar" value="Envio">

</form>
<a href="/profesores">Volver al listado</a>

</body></html>