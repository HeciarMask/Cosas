<?php
include('../View/funciones.php');
cabecera('Agenda Web');

echo "<div id=\"contenido\">\n";
if($resultado == "error"){
    echo "No se ha podido grabar el contacto. Dni ya existente - ".$resultado ;
}else{
    echo "Se ha añadido el siguiente contacto:<br>";
    echo '<table border = 2>';
    echo'<thead><tr><th>DNI</th><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th><th>Telefono</th></tr></thead>';
    echo "
        <tbody>
            <tr>
                <td>".$contacto->getDni()."</td>
                <td>".$contacto->getNombre()."</td>
                <td>".$contacto->getApellido1()."</td>
                <td>".$contacto->getApellido2()."</td>
                <td>".$contacto->getDireccion()."</td>
                <td>".$contacto->getTelefono()."</td>
            </tr>
        </tbody>
    ";
    echo"</table>";
}

echo "</div>";
pie();

?>