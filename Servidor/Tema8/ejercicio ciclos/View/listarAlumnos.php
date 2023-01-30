<html>

<head>
    <title></title>
</head>

<body>

    <br><br>

    <table border="solid">
        <tr>
            <th>
                Nombre
            </th>
        </tr>
        <?php
        foreach ($alumnos as $alumno) {
            echo "<tr><td>" . $alumno->getNombre() . "</td></tr>";
        }
        ?>
    </table>

    <a href='datos_index.php'>Volver al Menú de Opciones</a><br>
</body>

</html>