<?php
include("notas.php");
if (isset($_POST['alumno'])) {
    $seleccionado = $_POST['alumno'];
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
    <table border="solid">
        <?php
            $media = 0;
            echo "<h2>Las notas de $seleccionado</h2>";
            foreach($notas[$seleccionado] as $asignatura => $nota){
                echo "<tr><th>$asignatura</th><th>$nota</th></tr>";
                $media += $nota;
            }
            $media = $media / count($notas[$seleccionado]);
            echo "<tr><th>Nota Media</th><th>".$media."</th></tr>";
        ?>
    </table>
</body>

</html>
<?php
} else { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form name="notas" action="Ej02V2.php" method="post">
        Selecciona nombre del alumno: <select name="alumno">
            <?php
                foreach ($notas as $alumno => $lista)
                    echo "<option>$alumno</option>";
                ?>
        </select><br>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>
<?php }
?>