<?php
include('funciones.php');
cabecera('Inyecciones SQL');
echo '<div id="contenido">';
$usuario=$_POST['usuario'];
$pasword=$_POST['password'];
//conexion
$conexion= new mysqli("localhost", "root","","para_atacar");
if (($usuario=="") || ($pasword=="")) {
    print "<p>Hay que rellenar los dos campos.</p>\n";
} 
else 
{
/* Evitar inyecciones SQL usando sentencias preparadas*/
$sentencia=$conexion->stmt_init();
$sentencia->prepare("SELECT COUNT(*) FROM clientes 
        WHERE DNI=? AND PALABRA=?");
$sentencia->bind_param("ss",$usuario,$pasword);
$sentencia->execute();
/*usando el método bind_result*/
$sentencia->bind_result($num_filas);
$sentencia->fetch();
if (!$sentencia) {
    print "<p>Error en la consulta.</p>\n";
   } 
else
   { 
   if ($num_filas>0)
		{
            print "<p>Nombre de usuario y contraseña correctos.</p>\n";
        }
		else
		{           
			$sentencia->close();
			unset($sentencia);
			$sentencia=$conexion->stmt_init();
			$consulta = "SELECT COUNT(*) AS cuenta FROM clientes 
                WHERE DNI=?";
			$sentencia->prepare($consulta);
			$sentencia->bind_param("s",$usuario);
			$sentencia->execute();
			/*en vez de bind_result uso ahora el método get_result */
            $result = $sentencia->get_result();
		    $fila=$result->fetch_array();
	        $num_filas=$fila["cuenta"];
            if (!$result) {
                print "<p>Error en la consulta.</p>\n";
            } elseif ($num_filas>0) {
                print "<p>Contraseña incorrecta.</p>\n";
            } else {
                print "<p>Nombre de usuario incorrecto.</p>\n";
            }
        }
    }
}
echo "</div>";

pie();
?>
