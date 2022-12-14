<?php
$db = mysqli_connect("localhost", "root", "") or die("Unable to connect. Check your connection parameters.");

mysqli_select_db($db, "pruebafotos") or die (mysqli_error($db));
$sql = "SELECT personas.dni, personas.nombre, images.image_id, images.image_filename\n".
    "FROM personas LEFT JOIN images ON personar.dni=images.image_dni";

    $resultado = $db->query($sql);
    while($fila = $resultado->fetch_assoc()){
        extract($fila);
        $cadena = "<p>".$dni.",".$nombre;
        if($image_id == NULL)$foto = $dir."sinfoto.gif";
    }else{
        $foto=$dir.$image
    }

?>