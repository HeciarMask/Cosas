<?php
$dir='images';
 $image = imagecreatefromjpeg($dir . '/' . '12.jpg');
header('Content-Type: image/jpeg');
imagejpeg($image);
?>
