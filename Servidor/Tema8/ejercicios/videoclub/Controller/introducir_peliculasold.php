
<?php
require_once("../Model/base.php");
if(!isset($_POST["Insertar"]))
{
	require_once("../View/cabecera0.php");
	$rstTareas=miclase::obtenerTareas();
	foreach ($rstTareas as $tarea) 
	{
		
		
		$rstPersonas=miclase::obtenerPersonas($tarea);
		echo "<tr><td>". $tarea."</td>";
		echo "<input type='hidden' name =tarea[] value='".$tarea."'>";
		echo "<td><select name=personas[]>";
		foreach ($rstPersonas as $personaje)
		
		{
			
			echo "<option value='".$personaje->getNumero()."'>".$personaje->getNombrePersona()."</option>";
		}
	echo "</td></select></tr>";
	}
	echo '<tr><td align="left" colspan=2><input type=submit name ="Insertar" value="Insertar">';
	echo '<input type=reset value="Borrar"></td></tr></table></form>';
}
else
{
$v1=$_POST['titulo'];
$v2="SI";
$vectorTareas=$_POST["tarea"];
$vectorPersonas=$_POST["personas"];
$limite=count($vectorPersonas);
$c=mysql_connect("localhost","root","");
mysql_select_db($base,$c);
# inserción de registros*/
mysql_query("INSERT INTO peliculas(titulo, disponible) VALUES ('$v1','$v2')",$c);
$numero=mysql_insert_id();
for ($i=0;$i<$limite;$i++)
	{mysql_query("INSERT INTO trabajo VALUES (".$numero."," .$vectorPersonas[$i].",'".$vectorTareas[$i]."')",$c);}

if (mysql_errno($c)==0)
             {
             echo "<h2><center>Se han añadido correctamente los datos:</center></b></H2>";
			
             }
			 
else
             echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
            



mysql_close();
pie();
}?>




