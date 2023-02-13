<?php 
use App\Models\Contacto;
$miscontactos=Contacto::all();
?>
<!DOCTYPE html>
<head>
<title>Listado de Contactos</title>
</head>
<body>
    <h3>Mis Contactos</h3>
    <table border='1'><tr><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Teléfono</th></tr>        
    @foreach ($miscontactos as $unContacto)
        <tr><td>{{$unContacto->nombre}}</td>
            <td>{{$unContacto->apellido}}</td>
            <td>{{$unContacto->direccion}}</td>
            <td>{{$unContacto->telefono}}</td>
        </tr>

    @endforeach
</table>
</body>
</html>
