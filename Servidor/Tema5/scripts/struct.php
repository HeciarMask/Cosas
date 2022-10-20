
<?php
$base="ejemplos";$tabla="noticias";$c=mysqli_connect ("localhost","root","",$base);$resultado=mysqli_query( $c,"SHOW FIELDS from $tabla");$numero=mysqli_num_rows($resultado);print "La tabla tiene $numero campos<br>";
while($v=mysqli_fetch_assoc ($resultado)){
	foreach($v as $clave=>$valor) {
	      echo  $clave." , ".$valor,"<br>";
     }
}
?> 
