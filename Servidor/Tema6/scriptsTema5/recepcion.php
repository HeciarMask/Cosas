<!-- < ?xml version="1.0" encoding="iso-8859-1"> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
<?php
/* filtramos el tipo de archivos recibidos
de forma que solo se permitan imagenes en formato
jpg o gif. Si el fichero transferido tuviera formato
distinto,  exit() acabaría la ejecución del script */

if(!($_FILES['archivo']['type']=="image/jpeg" OR  $_FILES['archivo']['type']=="image/gif"  OR $_FILES['archivo']['type']=="image/png")){
    print "El formato ".$_FILES['archivo']['type'].
	                                   " no está permitido";
     exit();
 }
 /* filtremos ahora el tamaño de modo que no supere
 el máximo establecido en el hidden del formulario
 (logicamente ese valor no puede superar el valor máximo
 de la configuración de php, pero si puede ser menor)
 y también evitaremos archivos sin contenido, 
 es decir con tamaño CERO */
if($_FILES['archivo']['size']>$_POST['lim_tamano'] 
	                             OR $_FILES['archivo']['size']==0){
 print "El tamaño: ".$_FILES['archivo']['size']." excede el límite";
 exit();
 }

# asignemos un nombre a la imagen transferida
# de modo que se guarde en el servidor 
# con su nombre 

 $nuevo_nombre=$_FILES['archivo']['name'];
# añadámosle la extensión real de fichero que teníamos recogida en la variable nuevo_nombre


# aceptemos la transferencia siempre que el archivo tenga nombre
if ($_FILES['archivo']['tmp_name'] != "none" ){
/* con la función copy
pasaremos el archivo que está en el directorio temporal
al subdirectorio que contiene el script que estamos
ejecutando. Podríamos incluir un path y copiarlo
a otro directorio */
           if (copy($_FILES['archivo']['tmp_name'], "fotos_subidas/".$nuevo_nombre)) {
	             echo "<h2>Se ha transferido el archivo</h2>"; 
		   }
    }else{
    echo "<h2>No ha podido transferirse el fichero</h2>";  
}
?>
 </body>
 </html>
