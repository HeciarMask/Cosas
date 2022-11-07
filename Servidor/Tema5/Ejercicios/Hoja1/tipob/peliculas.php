<!-- peliculas.php -->
<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<html>
<head>
<title> Gestión de peliculas </title>
</head>
<body>
<h1>Gestión de peliculas</h1>
<p><a href="nuevapelicula.php">Introducir una nueva pelicula</a></p>

<form action="listapeliculas.php" method="post">
<p>Mostrar los peliculas según el siguiente criterio:<br />
Por autor:
<select name="">
  <option selected value="">Todos los personas</option>

</select><br />
Por compañia:
<select name="">
  <option selected value="">Todas las companyes</option>

?>
</select><br />
Por idioma:
<select name="">
  <option selected value="">Todos los idiomas</option>

Conteniendo el Texto: <input type="text" name="searchtext" /><br />
<input type="submit" name="submit" value="Search" />
</form>

<p align="center"><a href="admin.html">Vuelta a la home</a></p>
</body>
</html>