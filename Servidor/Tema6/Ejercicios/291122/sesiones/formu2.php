<?php

echo  "<form action=proceso2.php method=\"POST\">
   <table>
    <tbody>
      <tr>
        <td>Teclea un nombre:</td>
        <td><input type=\"text\" name=\"nombre\" size=\"40\" "
        ."maxlength=\"40\" id=\"cursor\" /></td>
      </tr>
     
    </tbody>
  </table>
  <p><input type=\"submit\" name='grabar' value=\"Entrar\" /></p>
    <p><input type=\"submit\" name='terminar' value=\"Terminar\" /></p>
</form>\n";
?>
