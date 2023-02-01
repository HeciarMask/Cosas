<?php
include('funciones.php');
cabecera('Control de PHP');
echo "<h1>Búsquedas</h1>";
echo "<form name='mi_formulario' action='../controller/consulta_pelis.php'' method='post'>";
echo "<p>Texto de búsqueda:<input type='text' name='texto' value='' ></p>";
echo "<input type='submit' value='enviar'>";
echo "<input type='reset' value='borrar'>";
echo "</FORM>";
pie();
?>