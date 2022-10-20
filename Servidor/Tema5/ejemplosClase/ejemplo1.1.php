<?php
/* Conectar con servidor de la base de datos y seleccionar una base de datos*/
$conexion = mysqli_connect("localhost","root","","ejemplos") or die ("No conecta");

/* Guardar en una variable la instruccion que queremos ejecutar */
$consulta = "SELECT TITULO, TEXTO FROM noticias";

/* Enviar la Instrucción a mySQL */
$resultado = mysqli_query($conexion, $consulta);
/* $resultado es un objeto de la clase mysqli_result, basicamente un 
cursor la cual tiene incorporado metodos para su manejo */

/* Obtener y procesar los resultados
 */

$fila = mysqli_fetch_row($resultado);
while($fila){
    echo "<p>".$fila[0].",".$fila[1]."</p>";

    /* echo "<pre>";
    print_r($fila);
    echo "</pre>"; */ 

    $fila = mysqli_fetch_row($resultado);
}

 /* echo "<pre>";
print_r($resultado);
echo "</pre>";  */
?>