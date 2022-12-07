<html>
<body>
<h1> Env&iacute;a un archivo </h1>
<form ENCTYPE="multipart/form-data" method="POST" action="recepcion.php">
<input type="file" name="archivo" /><br />
<input type="hidden" name="lim_tamano" value="1048576"/>
<input type="submit" name="envio" value="Enviar" />
<input type="reset" name="rest" value="Restaurar" />
</form>
</body>
</html>
