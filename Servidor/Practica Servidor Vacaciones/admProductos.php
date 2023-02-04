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
    <h1>Insertar Producto</h1>
    <form action="admInsProd.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nombre Producto:</td>
                <td><input type="text" name="prod" /></td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td><input type="text" name="desc" /></td>
            </tr>
            <tr>
                <td>Stock:</td>
                <td><input type="text" name="stock" /></td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td><select name="categoria">
                        <?php
                        while ($fila = $resCat->fetch_assoc()) {
                            echo "
                                <option value='" . $fila["CodCat"] . "'>" . $fila["Nombre"] . "</option>
                            ";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td><input type="text" name="precio" /></td>
            </tr>
            <tr>
                <td>Imagen:</td>
                <td><input type="file" name="uploadfile" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Upload" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>