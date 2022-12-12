<?php
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//Quitar la columna filename
$query = 'ALTER TABLE images DROP COLUMN image_filename';

mysqli_query($db,$query) or die (mysqli_error($db));

echo 'Images table successfully updated.';
?>