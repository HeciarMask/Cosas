<?php
include('../View/funciones.php');
cabecera('Agenda Web');
if ($numRegistros>0)
{
echo "<div id=\"contenido\">\n";
echo '<table border = 2>';
echo'<thead><tr><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th><th>Telefono</th></tr></thead>';
foreach($arrayContactos as $unContacto)
{
echo"<tr>";
echo"<td>".$unContacto->getNombre()." </td><td>". $unContacto->getApellido1()."</td><td>".$unContacto->getApellido2()."</td><td>".$unContacto->getDireccion()."</td><td>".$unContacto->getTelefono()."</td>";
echo"</tr>";
}

echo"</table>";
}
else
{echo "Ningun contacto cumple las condiciones de búsqueda";}
echo "</div>";
pie();

?>