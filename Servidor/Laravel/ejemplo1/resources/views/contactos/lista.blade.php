<!DOCTYPE html>

<head>
    <title>Mis contactos</title>
</head>

<body>
    <h2>Mis contactos</h2>
    <table border='solid'>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>
        @foreach($contactos as $unContacto)
        <tr>
            <td>{{$unContacto->nombre}}</td>
            <td>{{$unContacto->apellido}}</td>
            <td>{{$unContacto->telefono}}</td>
            <td>{{$unContacto->direccion}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>