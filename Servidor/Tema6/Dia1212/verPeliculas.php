<?php
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//en esta ruta especificamos el directorio para las imágenes
$dir="images";
$sql = "SELECT m.movie_name as titulo,p1.people_fullname as actor ,p2.people_fullname as director,\n"

    . "images.image_filename as nombreFichero FROM movie m \n"

    . "inner join  people p1 ON m.movie_leadactor=p1.people_id INNER JOIN people p2 ON m.movie_director=p2.people_id\n"

    . "INNER JOIN images ON m.movie_id=images.image_id";
$resultado=$db->query($sql);
while ($fila=$resultado->fetch_assoc()){
	extract($fila);
	echo "<p>";
	echo $titulo," ",$actor," ",$director," ";
	echo "<img src='".$dir."/".$nombreFichero."'>";
	echo "</p>";

}
?>