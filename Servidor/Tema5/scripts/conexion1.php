<?php

  $c = @mysqli_connect('localhost', 'root', '', "ejexmplos");# or die ("no conecta");

 if ($c)  

 echo 'Conectado satisfactoriamente'."<br>";

else

 echo 'No pudo conectarse: <br>' ; 

@mysqli_close($c);

echo 'Se ha cerrado la conexión con el servidor de bases de datos'."<br>"; 

?> 
