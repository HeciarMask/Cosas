<?php 
include('funciones.php');
require_once("funcionesBD.php");
cabecera('Alumnos');
echo "<div id=\"contenido\">";
echo "<form name='modificar' method=\"POST\" action='scriptactualizacion.php'>"; 
echo "<table align=center border=2 bgcolor='#F0FFFF'>"; 
echo "<td colspan=2 align=center>Seleccione alumnos para asignar a , Año: </td><tr>"; 
echo "<td colspan= align=center>Alumnos</td>"; 
echo "<td align=center>Selección</td></tr>";
extract($_POST);
/* echo $anno; */
$conexion = new mysqli("localhost", "root", "", "preparadasb");
$cadSql = "SELECT id, nombre FROM alumnos WHERE id NOT IN";
$cadSql .= "(SELECT id_alumno FROM alumnos_cursos)"; //WHERE año=\"".$anno."\" Si se coloca el filtro del año no funciona
$res = $conexion->query($cadSql);

while($fila = $res->fetch_assoc()){
    extract($fila);
    echo "<tr><td>$nombre</td><td><input type='checkbox' name='alumnos[$anno][$curso][]' value='$id' /></td>"; 
}
?> 

<tr><td colspan=2 align=center><br><input type=submit value='Grabar'></tr>



</form></table> </html>