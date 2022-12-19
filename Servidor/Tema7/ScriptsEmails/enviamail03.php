<?php
/*
 Con respecto a enviamail1 hemos cambiado la variable $headers por una matriz que guarda varios encabezados.
 Esto nos permite realizar tareas adicionales con el correo electrónico, incluyendo la inclusión de HTML.
 La primera línea (MIME-Version: 1.0) es obligatoria para utilizar opciones MIME extendidas como HTML.
 El \r\n se debe introducir entre cada encabezado. Las dos líneas siguientes indica que utilizaremos HTML en
 el mensaje y join es una alias de explode

 */
$to_address = $_POST['to_adress'];
$from_address = $_POST['from_adress'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = array();
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset="iso-8859-1"' ;
$headers[] ='Content-Transfer-Encoding: 7bit' ;
$headers[] = 'From: ' . $from_address;
?>
<html>
 <head>
  <title>Correo enviado!</title>
 </head>
 <body>
<?php
$success = mail($to_address, $subject, $message,  join("\r\n",$headers));
if ($success) {
    echo '<h1>Enhorabuena!</h1>';
    echo '<p>El  siguiente mensaje ha sido enviado: <br/><br/>';
    echo '<b>To:</b> ' . $to_address . '<br/>';
    echo '<b>From:</b> ' . $from_address . '<br/>';
    echo '<b>Subject:</b> ' . $subject . '<br/>';
    echo '<b>Message:</b></p>';
    echo $message;
} else {
    echo '<p><strong>Se produjo un error al enviar su mensaje.</strong></p>';
}
?>
 </body>
</html>