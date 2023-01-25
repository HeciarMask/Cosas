<?php
include('../View/funciones.php');
cabecera('Agenda Web');
echo "<div id=\"contenido\">\n";
echo "<h4>Criterios de búsqueda</h4>";
echo ('<form action="obtenerContactos.php"  method="post">'  );
echo("Nombre    ");
echo ("<input type='text' name='nombre' id='nombre'>");

echo("Primer Apellido");
echo ("<input type='text' name='apellido' id='apellido'>");

echo("Telefono    ");
echo ("<input type='text' name='telefono' id='telefono'>");
echo "<br><br>Orden:<br>";
echo "<input type='radio' name='orden' value='domicilio' />Domicilio<br>
      <input type='radio' name='orden' value='apellido1,apellido2' checked/>Apellidos<br>";



echo("<input type='submit' value='Enviar' name='envio' />");
echo ("</form>");
echo "</div>";
pie();
?>