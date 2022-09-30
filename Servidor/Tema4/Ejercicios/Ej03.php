<?php
// Para rellenar la primitiva queremos visualizar un array de seis elementos, conteniendo cada celda un
// número aleatorio comprendido entre 1 y 49 en la que habremos de evitar la posibilidad de que un número se
// repita dos veces
$numeros = range(1,49);//Antes tenia un bucle
shuffle($numeros);
for($j = 1; $j <= 6; $j++){
    echo "Numero $j: ".$numeros[$j]."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="lista" action="Ej03.php" method="post">
        <input type="submit" value="Recalcular">
    </form>
    
</body>
</html>