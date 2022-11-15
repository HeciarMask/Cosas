

Se va a  grabar la venta siguiente<br>
<table border="1" cellpadding="10" >
<form method='POST'>
<tr><td>Domicilio</td><td><b></b></td><td>Localidad</td><td><b></b></td></tr>
<tr><td>Precio de salida</td><td><b></b></td><td>Precio de venta</td><td><b></b></td></tr>
<tr><td colspan="2">Cliente</td><td colspan="2"><b></b></td></tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Grabar" /><td colspan="2"><input type="submit" name="cancelar" value="Cancelar" /></td></tr>
</table></form>
<?php
//para grabar la fecha en mysql 
		 $hoy=date('Y-m-d');
/* si se pulsa cancelar
header("Location:DatosVenta.php");
*/

?>