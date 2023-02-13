<!DOCTYPE html>

<head>
    <title>Listado de Contactos</title>
</head>

<body>
    <h3>Mis Contactos</h3>
    <h4><a href="/contactos/crear">Crear un nuevo contacto</a></h4>
    <table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        @foreach ($miscontactos as $unContacto)
        <tr>
            <td>{{$unContacto->nombre}}</td>
            <td>{{$unContacto->apellido}}</td>
            <td>{{$unContacto->direccion}}</td>
            <td>{{$unContacto->telefono}}</td>
            <td>
                <a href="/contactos/ver/{{$unContacto->id}}">Ver</a>
                <a href="/contactos/editar/{{$unContacto->id}}">Editar</a>
                <a href="/contactos/borrar/{{$unContacto->id}}">Eliminar</a>
            </td>
        </tr>

        @endforeach
    </table>
</body>

</html>