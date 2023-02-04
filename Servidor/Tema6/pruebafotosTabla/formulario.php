<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

       <title>Sube tu foto a nuestro sitio web!</title>
</head>

<body>
       <form action="guardarImagen.php" method="post" enctype="multipart/form-data">
              <?php
              require_once("funcionesBD.php");
              $conexion = new mysqli("localhost", "root", "", "fotosentabla");
              $miCondicion = " dni NOT IN (select num_ident  FROM fotos)";
              $arrayNombres = obtenerArrayOpcionesFiltrado("personas", "dni", "nombre", $miCondicion);
              pintarCombo($arrayNombres, "comboDni");
              ?>
              <table>
                     <tr>
                            <td>Nombre</td>
                            <td><input type="text" name="username" /></td>
                     </tr>
                     <td>Subir imagenes*</td>
                     <td><input type="file" name="uploadfile" /></td>
                     </tr>
                     <tr>
                            <td colspan="2">
                                   <small><em>* Admite los formatos: GIF, JPG/JPEG and PNG.
                                          </em></small>
                            </td>
                     </tr>
                     <tr>
                            <td>Image Caption<br />
                            </td>
                            <td><input type="text" name="caption" /></td>
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