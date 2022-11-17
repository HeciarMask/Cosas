<?php
//Igual que ejemplo3_sesiones.php pero pasando el id de la sesión por Get (funciona con cookies deshabilitadas)
session_name('leocadia');
session_start();
#pedimos que escriba el identificador único
echo session_id(),"<br>";
echo session_name(),"<br>";
?>
<A Href="ejemplo4_sesiones.php?<?php echo session_name()."=".session_id()?>">
 Volver a llamar esta página</A>


