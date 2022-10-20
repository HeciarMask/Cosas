<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<?php
if($c=mysqli_connect ("localhost","root",""))
{       echo "<h2> Conexión establecida con el servidor</h2><br>"; 
        if(mysqli_query ($c,"DROP DATABASE midb"))
        { 
         echo "<h2> Base de datos borrada</h2><br>"; 
        }
        else
        { 
         echo
	 "<h2> No ha sido posible BORRAR la base de datos</h2> <br>"; 
        } 
        if(mysqli_close($c)){ 
            echo "<h2> Conexión cerrada con exito</h2><br>";}
        else{ 
            echo "<h2> No se ha cerrado la conexión</h2>"; 
         }
}
else
{ 
        echo "<h2> NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN</h2>"; 
}
?>

</body>
</html>