<!-- nuevapelicula.php -->
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<html>
<head>
<title> Añadir nueva pelicula </title>
</head>


<form  method="post">
<p>Introduzca la nueva pelicula:<br />
<p>nombre:<br />
<textarea name="" rows="2" cols="45" >
</textarea></p>

<p>Autor:
<select name="">
  <option selected value="0">Seleccione uno</option>
 
</select>
</p>
<p>Idioma:
<select name="">
  <option selected value="0">Seleccione uno</option>
 

</select>
<p>compañia:

<select name="">
  <option selected value="0">Seleccione uno</option>
 
</select>
<br>
fecha:<input type="text" name="fecha"><br>
<p><input type="submit" name="submit" value="ENVIAR"></p>
</form>

</body>
</html>