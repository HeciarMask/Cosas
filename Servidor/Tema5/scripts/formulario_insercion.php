<html> 
<head> 
<title>Formulario para añadir datos a la tabla demo4</title> 
</head> 
<body> 
<center><h2>Tabla «demo4»<br>Formulario de altas<h2></center> 

<form name="altas" method="POST" action="script_insercion.php"> 
<table bgcolor="#E9FFFF" align=center border=2> 

<td align="right">Escribe tu D.N.I.: </td> 
<td align="left"> <input type="text" name="p_v1" value="" size=8></td><tr> 
<td align="right">Nombre....: </td> 
<td align="left"> <input type="text" name="p_v2" value="" size=20></td><tr> 
<td align="right">Primer apellido....: </td> 
<td align="left"> <input type="text" name="p_v3" value="" size=15></td><tr> 
<td align="right">Segundo apellido...: </td> 
<td align="left"> <input type="text" name="p_v4" value="" size=15></td><tr> 
<td align="right">Fecha de nacimiento: </td> 

<td align="left"> <select name="p_v5[2]"> 
<!-- insertamos un script PHP que nos genere autmaticamente las options con valores entre 
1 y 31 (se trata del campo dias //--> 

<?php for ($i=1;$i<32;$i++){ 
echo "<option>$i</option>"; 
} 
?> 
</select> de 

<select name="p_v5[1]"> 
<?php for ($i=1;$i<13;$i++){ 
echo "<option>$i</option>"; 
} 
?> 
</select> de 

<select name="p_v5[0]"> 
<?php for ($i=1935;$i<2004;$i++){ 
echo "<option>$i</option>"; 
} 
?> 

</select></td><tr> 
<td align="right">Sexo...:</td> 
<td align="left"> <input type="radio" name="p_v6" value="M" checked > Masculino <input type="radio" name="p_v6" value="F" > Femenino </td><tr> 
<td align="right">Hora de nacimiento: </td> 


<td align="left"> <select name="p_v7[0]"> 
<?php for ($i=0;$i<24;$i++){ 
echo "<option>$i</option>"; 
} 
?> 

</select> h   
<select name="p_v7[1]"> 
<?php for ($i=0;$i<60;$i++){ 
echo "<option>$i</option>"; 
} 
?> 
</select> m 
<select name="p_v7[2]"> 
<?php for ($i=0;$i<60;$i++){ 
echo "<option>$i</option>"; 
} 
?> 
</select> s</td><tr> 

<td align="right">Fumador:</td> 
<td align="left"> <input type="radio" name="p_v8" value="S" checked > Si <input type="radio" name="p_v8" value="N" > No </td><tr> 

<td align="right">Habla:<br> 
(<i>Si habla varios seleccionarlos<br> 
pulsando con el mouse encima de <br> 
cada uno de ellos con la tecla<br> 
<b>Ctrl</b> presionada</i>)</td> 
<td align="left"> <SELECT MULTIPLE name=p_v9[] SIZE=6> 
<option  value=1>Castellano</option> 
<option  value=2>Francés</option> 
<option value=4>Inglés</option> 
<option  value=8>Alemán</option> 
<option  value=16>Búlgaro</option> 
<option  value=32>Chino</option> 
</select> 
</td><tr> 


<td align=center><input type=submit value="Enviar"></td> 
<td align=center><input type=reset value="Borrar"></td> 
</form> 
</table> 
</body> 
</html> 

