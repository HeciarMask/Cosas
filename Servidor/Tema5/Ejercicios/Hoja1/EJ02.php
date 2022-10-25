<!-- 2) Crear un script que añada a la tabla1 100 registros de los cuales 40 serán repetidores y 60 no
repetidores:
 El DNI será un nº aleatorio entre 1 y 500.
 El nombre contendrá ‘nom..’ concadenado con el DNI generado rellenando con ceros por la
izquierda hasta una longitud de 3.
 El apellido contendrá ‘apel..’ concadenado con el DNI rellenado igual que el nombre.
 La fecha de nacimiento se generará aleatoriamente, dia entre 2 y 20, mes entre 1 y 12 y año entre
1986 y 1999.
 Se asignará aleatoriamente los 40 repetidores. -->
<?php
$c = mysqli_connect ("localhost", "root", "","practicas") or die("No ha conectado.");

$listaDNI = range(1,500);
$nRepetidores = 0;
shuffle($listaDNI);

for($i = 0; $i < 100; $i++){
    $dni = array_pop($listaDNI);
    switch($dni){
        case $dni > 99:
            break;
        case $dni > 9:
            $dni = "0".$dni;
            break;
        default:
            $dni = "00".$dni;
    }
    $nombre = "nom..".$dni;
    $apellido = "apel..".$dni;
    $fechaNac = rand(1986,1999)."-".rand(1,12)."-".rand(2,20);

    if($nRepetidores < 40){
        $repetidor = "S";
        $nRepetidores++;
    }else{
        $repetidor = "N";
    }

    mysqli_query($c,"INSERT INTO tabla1(DNI,nombre,apellidos,fechaNac,repetidor)
                    VALUES ('$dni','$nombre','$apellido','$fechaNac','$repetidor')");

     if (mysqli_errno($c)==0){
        echo "<h2>Registro AÑADIDO</b></H2>"; 
    }else{ 
        $numerror=mysqli_errno($c); 
        $descrerror=mysqli_error($c); 
        echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>"; 
    } 
} 
mysqli_close($c);

?>