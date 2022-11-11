<?php
include('funciones.php');
cabecera('Inyecciones SQL');
echo '<div id="contenido">';
    print "<form action=\"entrar2.php\" method=\"POST\">
  <p>Para entrar en el sistema escriba su nombre de usuario y contraseña</p>
  <table>
    <tbody>
      <tr>
        <td>Usuario:</td>
        <td><input type=\"text\" name=\"usuario\" size=\"100\" "
        ."maxlength=\"100\" id=\"cursor\" /></td>
      </tr>
      <tr>
        <td>Contraseña:</td>
        <td><input type=\"text\" name=\"password\" size=\"100\" "
        ."maxlength=\"100\" /></td>
      </tr>
    </tbody>
  </table>
  <p><input type=\"submit\" value=\"Entrar\" /></p>
</form>\n";
 echo "</div>";
 pie();
?>
