<?php
include ("arrays.php");

if(isset($_POST['nombre'])){
$alumno = $_POST['nombre'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selección: <?php echo $alumno; ?>
        <table border="solid">
        <tr><th>Ciudades Visitadas</th></tr>
        <?php
            foreach($arraygeneral[$alumno] as $j){
                echo "<tr><th>$j</th></tr>";
            }
        ?>
    </table>
</body>
</html>
<?php
}else{?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form name="nombres" action="por_nombre.php" method="post">
            Usuario: <select name="nombre">
                <?php
                    foreach($arraynombres as $i){
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Consultar">
        </form>
    </body>
    </html>
<?php
}?>