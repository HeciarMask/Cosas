<?php
include('../View/funciones.php');
cabecera('Agenda Web');

echo "<div id=\"contenido\">\n";
if($resultado2 == "error"){
    echo "Ningun contacto cumple las condiciones de búsqueda - ". $resultado2;
}else{
    echo '<table border = 2>';
    echo'<thead><tr><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Direccion</th><th>Telefono</th></tr></thead>';
    echo "<tbody>";
    foreach($resultado2 as $contacto){
        echo "
            <tr>
                <td>".$contacto->getDni()."</td>
                <td>".$contacto->getNombre()."</td>
                <td>".$contacto->getApellido1()."</td>
                <td>".$contacto->getApellido2()."</td>
                <td>".$contacto->getDireccion()."</td>
                <td>".$contacto->getTelefono()."</td>
            </tr>
        ";
    }
    echo"</tbody></table>";
}
echo "</div>";
pie();

?>