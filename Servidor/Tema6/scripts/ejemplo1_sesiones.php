<?php
session_start();
#pedimos que escriba el identificador único y el nombre de la sesión
echo session_id(),"<br>";
echo session_name(),"<br>";
?>
<A Href="ejemplo1_sesiones.php">Volver a llamar a esta página</A>
