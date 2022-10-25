<?php
/* Conectar con servidor de la base de datos y seleccionar una base de datos*/
$conexion = mysqli_connect("localhost","root","","ejemplos") or die ("No conecta");

/* Guardar en una variable la instruccion que queremos ejecutar */
$consulta = "SELECT id, fecha, titulo, texto FROM noticias";

/* Enviar la Instrucción a mySQL */
$resultado = mysqli_query($conexion, $consulta);
/* $resultado es un objeto de la clase mysqli_result, basicamente un 
cursor la cual tiene incorporado metodos para su manejo */

/* Obtener y procesar los resultados
 */

/* $fila = mysqli_fetch_assoc($resultado); NO HACE FALTA */
while($fila = mysqli_fetch_assoc($resultado)){
    extract ($fila);

    echo "<p>ID:".$id.", Fecha:".$fecha.", Titulo:".$titulo.", Texto:".$texto."</p>";

    #echo "<pre>";print_r($fila);echo "</pre>"; 
}

 /* echo "<pre>";
print_r($resultado);
echo "</pre>";  */
?>