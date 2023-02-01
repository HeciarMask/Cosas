<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Tarea 5: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
require_once("base.php");
// comprobar si se ha enviado el formulario
if (isset($_POST["enviar"]))
	{
	if (empty($_POST["usuario"]) || empty($_POST["password"]))
		{echo '<div><span class="error">
		Error , hay que rellenar los dos campos</span></div>';}
	else
	{
	//ver si usuario correcto
	if (base::verificaCliente($_POST["usuario"],$_POST["password"]))
		{
			session_start();
			$_SESSION["usuario"]=$_POST["usuario"];
			header ("Location:productos.php");
		}
		
	else
		{header ("Location:login.php");}
	}
	}
else
{?>
<div id='login'>
    <form action='login.php' method='post'>
    <fieldset >
        <legend>Login</legend>
        
        <div class='campo'>
            <label for='usuario' >Usuario:</label><br/>
            <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/>
        </div>

        <div class='campo' style='text-align: center'>
            <input type='submit' name='enviar' class='boton' value='Enviar' />
        </div>
    </fieldset>
    </form>
    </div>
<?php } ?>

</body>
</html>