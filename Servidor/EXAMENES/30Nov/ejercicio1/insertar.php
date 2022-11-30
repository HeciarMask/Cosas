<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ejercicio 1</title>
<link href="examen.css" rel="stylesheet" type="text/css">
</head>
<body>     
<div id="encabezado">
<h1>  Nueva venta</h1>
</div>
	
<form   method='post'><fieldset><legend>Cliente: </legend>
<br>aqui el combo de clientes
<legend>Unidades: </legend>
<input type='text' name='unidades' /><br>
<legend>Fecha: </legend>
<input type='text' style='color: #F00;background-color: #ccc;' name='fecha' value='<?=date("Y/m/d")?>'  />
<input type='submit' value='Selección' name='actualiza' />
<input type='submit' value='cancelar' name='cancela' />
</fieldset>
<form>

<br><a href="parte1.php">Página Inicial </a>
</div>		
					
					