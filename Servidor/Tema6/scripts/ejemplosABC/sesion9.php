<?php
/* pese a que la sesión viene de la página anterior  tenemos que poner nuevamente session_cache_limiter
   ya que esta instrucción no se conserva,  solo es válida para la página en la que esta definida.  También 
   tenemos que poner en session_name el mismo  nombre de la página anterior, de no hacerlo PHP entendería 
   que se trata de iniciar una sesion distinta. Por ultimo también debemos iniciar la sesión,  es obligatorio iniciarla */
session_cache_limiter('nocache,private');
session_name('ejemplo_sesion');
session_start();
/* comprobaremos que la sesion se ha propagados visualizando el array asociativo 
$_SESSION que contiene todas la variables de Sesion */

foreach($_SESSION as $indice=>$valor){
	print("Variable: ".$indice." Valor: ".$valor."<br>");
}
# modificamos los valores de las variables de sesion 
echo "modificamos valor de las variables<br>";
$_SESSION['nombre']="Jorge Gamba";
$_SESSION['edad'] +=2;
# destruimos la tercera variable 
unset($_SESSION['variable3']);
# propagamos la sesion a la página siguiente con identico proceso
?> 
<A Href="sesion10.php?<?php echo session_name().'='.session_id()?>">Propagar sesion</A>
