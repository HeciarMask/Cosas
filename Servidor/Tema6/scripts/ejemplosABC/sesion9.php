<?php
/* pese a que la sesi�n viene de la p�gina anterior  tenemos que poner nuevamente session_cache_limiter
   ya que esta instrucci�n no se conserva,  solo es v�lida para la p�gina en la que esta definida.  Tambi�n 
   tenemos que poner en session_name el mismo  nombre de la p�gina anterior, de no hacerlo PHP entender�a 
   que se trata de iniciar una sesion distinta. Por ultimo tambi�n debemos iniciar la sesi�n,  es obligatorio iniciarla */
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
# propagamos la sesion a la p�gina siguiente con identico proceso
?> 
<A Href="sesion10.php?<?php echo session_name().'='.session_id()?>">Propagar sesion</A>
