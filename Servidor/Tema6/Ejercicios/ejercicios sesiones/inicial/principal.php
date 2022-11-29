<?php
session_cache_limiter();
session_name('cesta');
session_start();

#session_destroy(); 
?>

<table border="1" >
    <tr><td>
        <img src="imagenes/nike.bmp" height="72" width="72">
    </td><td>
        <a href="cesta.php?producto=nike&precio=23.6"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="A�adir al Carrito" /></a>
    </td>
    <tr><td>
        <img src="imagenes/adidas.bmp" height="72" width="72">
    </td><td>
        <a href="cesta.php?producto=adidas&precio=123.3"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="A�adir al Carrito" /></a>
    </td></tr>
    <tr><td>
        <img src="imagenes/reebok.jpg" height="72" width="72">
    </td><td>
        <a href="cesta.php?producto=reebok&precio=35"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="A�adir al Carrito" /></a>
    </td></tr>
	<tr><td>
        <img src="imagenes/nikeid.png"height="72" width="72">
    </td><td>
        <a href="cesta.php?producto=nikeid&precio=105" ><img height="72" width="72" src="imagenes/Carrito.jpg" alt="A�adir al Carrito" /></a>
    </td></tr>
	<tr><td>
        <img src="imagenes/nike-mercurial-superfly.jpg" height="72" width="72">
    </td><td>
        <a href="cesta.php?producto=nikemercurial&precio=85"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="A�adir al Carrito" /></a>
    </td></tr>
	<tr><td>
        <img src="imagenes/nikeft.jpeg" height="72" width="72">
    </td><td>
        <a href="cesta.php?producto=nikeft&precio=115"><img height="72" width="72" src="imagenes/Carrito.jpg" alt="A�adir al Carrito" /></a>
    </td></tr>
</table>

</body>

</html>