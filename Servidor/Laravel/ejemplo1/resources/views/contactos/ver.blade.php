<?php 
/*
echo "<pre>";
print_r();
echo "</pre>";
*/
?>
<html><body>
<h3>Datos del contacto</h3>

<p>Nombre:<b> {{$contactoActual->nombre}}</b> </p>      
<p>Apellido:<b>{{$contactoActual->apellido}}</b></p>
<p>Teléfono:<b>{{$contactoActual->telefono}}</b></p>
<p>Dirección:<b>{{$contactoActual->direccion}}</b></p>        

<a href="/contactos">Volver al listado</a>

</body></html>