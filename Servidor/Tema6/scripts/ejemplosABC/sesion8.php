<?php
# deactivamos la opcion de guardar en la cache del navegador del cliente
session_cache_limiter('nocache,private');
# asignamos nombre a sesi�n (aunque podr�amos dejarlo por defecto)
session_name('ejemplo_sesion');
# iniciamos la sesion
session_start();
# creamos variables de sesion y les asignamos valores
$_SESSION['nombre']="Javier Aranda";
$_SESSION['edad']=25;
$_SESSION['variable3']="Variable para borrar";
/* cerramos el script e insertamos un enlace a otra p�gina
   y propagamos la sesi�n incluyendo en la llamada
   el nombre de la session y su identificador
   En esta p�gina no se visualizar�a nada. Solo el enlace */
?> 
<A Href="sesion9.php?<?php echo session_name().'='.session_id()?>">Propagar sesion</A>
