<html>
 <head>
  <title>Envio de emails . Prueba 2</title>
  </head>
 <body>
  <h1>Envie un correo</h1>
  <form method="post" action="enviamail03.php">
   <table>
    <tr>
     <td>E-mail del remitente:</td>
     <td><input type="text" name="from_adress" size="40" /></td>
    </tr><tr>
    <td>E-mail del destinatario:</td>
     <td><input type="text" name="to_adress" size="40" /></td>
    </tr>
     <tr>
     <td>Asunto:</td>
     <td><input type="text" name="subject" size="80" /></td>
    </tr><tr>
     <td colspan="2">
      <textarea cols="76" rows="12" 
       name="message">Escriba aquí su mensaje</textarea>
     </td>
    </tr><tr>
     <td colspan="2">
      <input type="submit" value="Send" /> 
      <input type="reset" value="Reset the form" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>