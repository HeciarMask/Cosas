<?php
if (mail('jmvilasg@gmail.com','Hola Mundo','Este es el primer correo que mando desde PHP','From: Mail Contact Form <you@yourdomain.com>'))
	echo "correo enviado";
else
	echo " fallo ";
?>