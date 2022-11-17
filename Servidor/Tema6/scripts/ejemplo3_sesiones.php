<?php
//Igual que ejemplo1_sesiones.php pero dándole un nombre a la sesión
session_name('leocadia');
session_start();
#pedimos que escriba el identificador único
echo session_id(),"<br>";
echo session_name(),"<br>";
?>
<A Href="ejemplo3_sesiones.php">Volver a llamar esta página</A>


