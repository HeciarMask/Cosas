<?php $base="ejemplos"; $num_borrados=0;$conexion=mysqli_connect ("localhost","root","",$base); 
foreach ($_POST['borra'] as $indice=>$valor){ 
     /*ejecutamos la instruccion DELETE filtrada por WHERE para que borre el registro en el que coincida DNI con el indice en demo4, y en las demás tablas 		se borrarán puesto que se definieron las foreign key con  ON DELETE CASCADE*/

        mysqli_query($conexion,"DELETE FROM demo4 WHERE (DNI=$indice)"); 
}mysqli_close($conexion); header("Location:formularioBorrado.php");

?> 