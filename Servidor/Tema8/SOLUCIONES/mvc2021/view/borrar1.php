
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control bd</title>
</head>
<h3 class="text-center">Se borrará la siguiente información de la base de datos:</h3>
<hr>
<table>
<tr><td>DNI: <?=$dni?></td>
<tr><td>Nombre: <?=$nombre?></td>
<tr><td>Apellidos:<?=$apellidos?></td>
<tr><td colspan="2">¿Está seguro?
<form action="borrar2.php" method="post">
	<input type="hidden" name="dni" value="<?=$dni?>">
</td><tr><td><input type="submit" name="respuesta" value="Si">
</td><td><input type="submit"  name="respuesta" value="No"></td> 
</tr>
</table>
</form>
