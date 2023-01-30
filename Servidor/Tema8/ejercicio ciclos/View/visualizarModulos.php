<html>

<head>
    <title>Visualizar alumnos</title>
</head>

<body>
    <form name="formulario" method="post" action="../Controller/listarAlumnos.php">
        <select name="mod">
            <?php
            foreach ($modulos as $modulo) {
                echo "<option value='" . $modulo->getId() . "'>" . $modulo->getNombre() . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Ver Alumnos" />
        </p>
    </form>
    <br><br>
    <a href='datos_index.php'>Volver al Menú de Opciones</a><br>
</body>

</html>