<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">

<!-- 
    Mostrar los datos del producto seleccionado en la página anterior  dentro de un formulario que permita cambiarlos, y dos botones: 
    "Actualizar" y "Cancelar". El formulario se enviará a la página "actualizar.php".
 -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 1</title>
        <link href="examen.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       
		<div id="encabezado">
			<h1> Edici&oacute;n de un producto</h1>
		</div>
		<div id="contenido">
			<h2>Producto:</h2>
			<form  action='actualizar.php' method='post'>
				C&oacute;digo: <input type='text' style='color: #F00;background-color: #ccc;' name='cod' value='Aquí el códgo solo lectura' readonly />
	<!-- Mostramos en modo edición los datos de  Nombre, Descripción y Precio-->
			<fieldset><legend>Nombre: </legend><textarea name='nombre' rows='3' cols='50' >Aquí el nombre</textarea></fieldset>
			<fieldset><legend>PVP: </legend><input type='text' name='PVP' value='Aquí el precio'/></fieldset>
			<input type='submit' value='actualizar' name='actualiza' />
			<input type='submit' value='cancelar' name='cancela' />
		</form>
					
		</div>
	</body>
</html>