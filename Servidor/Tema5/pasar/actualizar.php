<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">

<!-- 
    Simplemente redirige a la página "listado.php", pero si en el formulario anterior se ha pulsado 
    "Actualizar" (y no "Cancelar"), antes de redirigir debe ejecutar una consulta para cambiar los 
    datos del producto.
 -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Si no se pulsa el botón de aceptar, a los diez segundos se redirige a listado.php -->
        <meta http-equiv="refresh" content="10; url=listado.php" />	
        <title>Ejercicio 1</title>
        <link href="examen.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	<div id="encabezado">
			<h1> Datos actuales del producto</h1>
		</div>
	
	<div id="contenido">
		<form  action='listado.php' method='post'>
				<!-- Mostramos los datos descativando la edición-->
					<p>C&Oacute;DIGO: <b><input type='text'  disabled /></b></p>
				  	<p>NOMBRE: <b><input type='text'  disabled /></b></p>
				  	<p>PVP: <b><input type='text'  disabled /></b></p>
				  	<p>FAMILIA: <b><input type='text'  disabled /></b></p>
					
					
				<input type='submit' value='continuar' name='continua' />
		</form>				
	</div>
	</body>
</html>