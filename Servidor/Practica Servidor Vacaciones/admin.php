<?php
/*comprueba que el usuario haya abierto sesión o redirige*/
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
</head>

<body>
    <?php
    require 'admCabecera.php';
    ?>
    <h1>Lista de Clientes</h1>
    <?php
    $clientes = cargarClientes(); // Recibe un ResultSet
    if ($clientes === false) {
        echo "<p class='error'>Error al conectar con la base datos</p>";
    } else {
        echo "<ul>"; //abrir la lista
        while ($fila = mysqli_fetch_assoc($clientes)) {
            $url = "admClientes.php?cliente=" . $fila['NUM_CLIENTE'];
            echo "<li><a href='$url'>" . $fila['NOMBRE'] . "</a></li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>