<!--<span style="font-family: arial; font-size: 8pt; font-weight: bold; font-style:  oblique;">
Frase de prueba de fuente arial</span><br>

donde pone arial, tambien debe salir con "courier","sans-serif","times","tahoma" y,"verdana"
donde pone 8 debe salir con 10,12,16,20 y 30
donde pone bold debe salir tambien normal, lo mismo con oblique
!-->
<?php
$fuentes = array("arial", "courier", "sans-serif", "times", "tahoma", "verdana");
$tamaños = array(8, 10, 12, 16, 20, 30);
$estilos1 = array("bold", "normal");
$estilos2 = array("oblique", "normal");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Tema 4</title>
</head>
<body>
    <?php
        foreach($fuentes as $fuente){
            foreach($tamaños as $tamaño){
                foreach($estilos1 as $estilo1){
                    foreach($estilos2 as $estilo2){
                        echo "<span style='font-family: $fuente; font-size: $tamaño pt; font-weight: $estilo1; font-style:  
                        $estilo2;'> Frase de prueba de fuente arial</span><br>";
                    }
                }
            }
        }
        
    ?>
</body>
</html>

