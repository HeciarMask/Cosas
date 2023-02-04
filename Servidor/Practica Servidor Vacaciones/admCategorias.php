<?php
/*comprueba que el usuario haya abierto sesión o redirige*/
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
$resCat = cargar_categorias();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
</head>

<body>
    <?php
    require 'admCabecera.php';
    ?>
    <h1>Insertar Categoria</h1>
    <form action="admInsCat.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nombre Categoria:</td>
                <td><input type="text" name="nombre" /></td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td><input type="text" name="desc" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Insertar" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>