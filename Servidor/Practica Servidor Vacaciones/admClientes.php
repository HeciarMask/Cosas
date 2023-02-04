<?php
/*comprueba que el usuario haya abierto sesión o redirige*/
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();

$idCliente = $_GET["cliente"];
$nombre = pideCliente($idCliente);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    require 'admCabecera.php';
    ?>
    <h1>Pedidos de <?= $nombre ?></h1>
    <?php
    $pedidos = recibePedidos($idCliente);
    echo "
    <table border='solid'>
        <tr>
            <th>Pedido</th>
            <th>Linea</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>Cantidad</th>
        </tr>
";

    foreach ($pedidos as $numPed => $lineas) {
        echo "
        <tr>
            <td>$numPed</td>
    ";
        foreach ($lineas as $linea => $datos) {
            echo "
            <td>$linea</td>
        ";
            foreach ($datos as $dato) {
                echo "
                <td>$dato</td>
            ";
            }
        }

        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>