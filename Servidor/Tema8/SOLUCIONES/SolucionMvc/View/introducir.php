<?php
include('funciones.php');
cabecera('Introducir contactos');
?>
<div id="contenido">;

<form  method="POST" action="grabarContacto.php">
<table bgcolor="#E9FFFF" align=center border=2>

<td align="left">D.N.I.: </td>
<td align="left"> <input type="text" name="dni" value="" size=10></td><tr>
<td align="left">Nombre.: </td>
<td align="left"> <input type="text" name="nombre" value="" size=15></td><tr>
<td align="left">Apellido1.: </td>
<td align="left"> <input type="text" name="apellido1" value="" size=20></td><tr>
<td align="left">Apellido2.: </td>
<td align="left"> <input type="text" name="apellido2" value="" size=20></td><tr>
<td align="left">Domicilio.: </td>
<td align="left"> <input type="text" name="domicilio" value="" size=20></td><tr>
<td align="left">Teléfono.: </td>
<td align="left"> <input type="text" name="telefono" value="" size=20></td><tr>

<td align="left" colspan=2><input type=submit value="Insertar">
<input type=reset value="Borrar"></td>
</table>
</div>
<?php pie(); ?>