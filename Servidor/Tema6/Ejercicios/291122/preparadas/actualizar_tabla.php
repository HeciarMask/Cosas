<?php
include('funciones_fecha.php');
cabecera('Control de PHP');
echo "<div id=\"contenido\">";

extract($_POST);

$conexion = new mysqli("localhost", "root", "", "preparadas");
$contador = 0;

foreach($extra as $fecha => $lista){
    foreach($lista as $id => $horas){
        if($horas > 0){
            echo "$id, $fecha, $horas";
            $conexion->query("INSERT INTO horas_extra (id_trabajador, fecha, num_horas) VALUES ('$id','$fecha','$horas')");
            $contador++;
            echo "INSERT INTO horas_extra (id_trabajador, fecha, num_horas) VALUES ('$id','$fecha','$horas')";
        }
    }
}


echo "Se realizaron $contador registros.";
echo "</div>";
pie();
?>