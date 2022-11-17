<?php
//Igual que ejemplo1_sesiones.php pero pasando el id de la sesión por Get (funciona con cookies deshabilitadas)
session_start();
#pedimos que escriba el identificador único y el nombre de la sesión
echo session_id(),"<br>";
echo session_name(),"<br>";
?>
<A Href="ejemplo2_sesiones.php?<?php echo session_name()."=".session_id()?>">
       Volver a llamar esta página</A>

