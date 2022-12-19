<?php
$to_address = $_POST['to_adress'];
$from_address = $_POST['from_adress'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: '.$from_address;

?>
<html>
 <head>
  <title>Correo enviado!</title>
 </head>
 <body>
<?php
$success = mail($to_address, $subject, $message,  $headers);
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