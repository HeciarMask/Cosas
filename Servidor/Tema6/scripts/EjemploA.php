<?php
# desactivamos la opcion de que las páginas puedan guardarse en la cache del navegador del cliente
session_cache_limiter('nocache,private');
# le asignamos un nombre a la sesión aunque lo habitual sería dejar el nombre por defecto
# que le asigna la configuración de php.ini
session_name('pruebas');
# iniciamos la sesion
session_start();
# creamos variables de sesion y les asignamos valores
$_SESSION['valor1']=25;
$_SESSION['valor2']="Ambrosio de Morales";
$_SESSION['variable3']="Una prueba más";
/* cerramos el script e insertamos un enlace a otra página  y propagamos la sesión incluyendo en la llamada el nombre de la session y su identificador En esta página no se visualizaría nada. Solo el enlace */
?> 
<A Href="ejemploB.php"> Propagar la sesion</A>
