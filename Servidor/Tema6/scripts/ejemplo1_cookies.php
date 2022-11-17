<?php
# setcookie escribe el contenido de la cookie
# en el ordenador del cliente
setcookie("cookie1","Mi regalito",time()+3600);
# escribe el valor leido en la cookie
echo "Esta es la cookie:",$_COOKIE['cookie1'];
?>
