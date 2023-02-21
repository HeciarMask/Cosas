<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"></head>
<body>
    <h2>Nuevo Empleado</h2>
    
    <form action method ="POST">
        @csrf
    <div class="form-group">
    <label>Nombre:</label>
    <input type="text" class="form-control" name="nombre" placeholder="Su nombre"><br>
    <label>Apellido:</label>
    <input type="text" class="form-control" name="apellidos" placeholder="Su Apellido"><br>
    <label>Sueldo:</label>
    <input type="text" class="form-control" name="sueldo" placeholder="Su salario" ><br>
    <label>Departamento:</label>
    <select id="departamento_id"  class="form-control" name="departamento_id">
                    </select><br>

    <label>Idiomas:</label>
    <select id="idioma_ids" class="form-control" name="idioma_ids[]" multiple>
            </select></p>
   
     <button type="submit" class="btn btn-primary">Guardar</button>
    
</div>
</body>
</html>