<!DOCTYPE html >
<head>
<meta charset="utf-8">
   <link href=\"miestilo.css\" rel=\"stylesheet\" type=\"text/css\" />

<title>Formulario para añadir datos </title> 
</head> 
<body> 
<center><h2>Formulario de altas<h2></center> 

<form name="altas" method="POST" action="grabar.php"> 
<table bgcolor="#E9FFFF" align=center border=2> 

<td align="right">Escribe tu D.N.I.: </td> 
<td align="left"> <input type="text" name="dni" value="" size=8></td><tr> 
<td align="right">Nombre....: </td> 
<td align="left"> <input type="text" name="nombre" value="" size=20></td><tr> 
<td align="right">Apellidos...: </td> 
<td align="left"> <input type="text" name="apellidos" value="" size=15></td></tr> 
<tr> 
<td align="right">Sexo...:</td> 
<td align="left"> 
<input type="radio" name="sexo" value="m"  > Masculino 
<input type="radio" name="sexo" value="f" > Femenino 
</td>

</select> </tr><tr> 

       


<td align="right">Habla:<br> 
(<i>Si habla varios seleccionarlos<br> 
pulsando con el mouse encima de <br> 
cada uno de ellos con la tecla<br> 
<b>Ctrl</b> presionada</i>)</td> 
<td align="left"> <SELECT MULTIPLE name="idiomas[]" SIZE=9> 

</select> 
</td><tr> 

<!--colocamos los botones de enviar y borrar //--> 


<td align=center><input type=submit name="accion" value="Enviar"></td> 
<td align=center><input type=submit name="accion" value="Cancelar"></td> 
</table> </form>
</body> 
</html> 
