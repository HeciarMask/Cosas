<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Manipular las matrices</title>
    <style type="text/css">
      h1 { font-family: "Courier New",Courier,monospace ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
    <div>

    
    <h1>explode()</h1>
    <?php
    $lista = 'azul, blanco, rojo';
    $colores = explode(', ',$lista);
      // separador = coma+espacio
    foreach($colores as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    echo '<b>Con el parámetro "límite"</b><br />';
    $lista = '1,2,3,4,5,6,7,8,9,0';
    echo '<b>= +4</b><br />';
    $cifras = explode(',',$lista,4);
    foreach($cifras as $valor)
      { echo "$valor<br />"; }
    echo '<b>= -4</b><br />';
    $cifras = explode(',',$lista,-4);
    foreach($cifras as $valor)
      { echo "$valor<br />"; }
    echo '<b>= 0 (equivalente a 1)</b><br />';
    $cifras = explode(',',$lista,0);
    foreach($cifras as $valor)
      { echo "$valor<br />"; }
    ?>
    
    <h1>implode()</h1>
    <?php
    $colores = array('azul','blanco','rojo');
	var_dump($colores);
	
	echo "<h3>.....</h3>";
	print_r($colores);
    $lista = implode(', ',$colores);
      // separador = coma+espacio
	  	echo "<h3>.....</h3>";
    echo $lista;
    ?>


    </div>
  </body>
</html>
