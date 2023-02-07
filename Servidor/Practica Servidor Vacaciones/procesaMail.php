<?php
include("bd.php");
extract($_GET);

$destino = recibeCorreo($usuario);

$pedidos = recibePedidos($usuario);
$contenido = "
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
    if ($numPed == $pedido) {
        $contenido .= "
			<tr>
				<td>$numPed</td>
		";
        foreach ($lineas as $linea => $datos) {
            $contenido .= "
				<td>$linea</td>
			";
            foreach ($datos as $dato) {
                $contenido .= "
					<td>$dato</td>
				";
            }
        }
        $contenido .= "</tr>";
    }
}
$contenido .= "</table>";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';

if (mail($destino, 'Su tienda de confianza. Pedido nº: ' . $pedido, $contenido, implode("\r\n", $headers))) {
    $_SESSION["realizado"] = "Correo enviado";
} else {
    $_SESSION["realizado"] = "Error enviado el correo";
}


/* header("Location:categorias.php"); */
