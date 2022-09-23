<?php
    if (isset($_POST['num'])){
        $num = $_POST['num'];
        echo "La tabla de multiplicar del $num es:<br>";
        for($i = 1; $i <= 10; $i++){
            echo "$i x $num = ".($i*$num)."<br>";
        }
    }
    else{
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
                <form name="tabla" action="P8.php" method="post">
                Introduzca un número: <input type="text" name="num">
                <input type="submit" value="Enviar">
            </form>
            </body>
            </html>
        <?php
    }
?>