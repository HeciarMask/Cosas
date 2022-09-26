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
    

    <h1>array_replace()</h1>
    <?php
    $matriz = array('c1' => 'verde','c2' => 'blanco');
    $matriz_reemplazo = array('c1' => 'azul','c3' => 'rojo');
    // Visualización de control.
    echo '<b>Matriz de inicio:</b><br />';
    foreach($matriz as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    echo '<b>Matriz de reemplazo:</b><br />';
    foreach($matriz_reemplazo as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // Reemplazo.
    $matriz_resultado = array_replace($matriz,$matriz_reemplazo);
    // Visualización del resultado.
    echo '<b>Resultado:</b><br />';
    foreach($matriz_resultado as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    ?>

    <h1>[a|k][r]sort()</h1>
    <?php
    $matriz = array('c3' => 'rojo','c1' => 'verde',
                     'c2' => 'azul');
    // Visualización de control.
    echo '<b>Matriz de inicio:</b><br />';
    foreach($matriz as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // sort
    echo '<b>sort: clasificación por valor, claves no conservadas</b><br />';
    $matriz_bis = $matriz;
    sort($matriz_bis);
    foreach($matriz_bis as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // asort
    echo '<b>asort: clasificación por valor, claves conservadas</b><br />';
    $matriz_bis = $matriz;
    asort($matriz_bis);
    foreach($matriz_bis as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    // ksort
    echo '<b>ksort: clasificación por clave, claves conservadas</b><br />';
    $matriz_bis = $matriz;
    ksort($matriz_bis);
    foreach($matriz_bis as $clave => $valor)
      { echo "$clave => $valor<br />"; }
    ?>

    
    <h1>Clasificación natural</h1>
    <?php
    $matriz = 
	   ['faq1.txt','faq30.txt','faq100.txt','faq2000.txt'];
    // Visualización de control.
    echo '<b>Matriz de inicio:</b><br />';
    foreach($matriz as $valor)
	   { echo "$valor<br />"; }
    // Clasificación por defecto
    echo '<b>Clasificación por defecto (alfabética):</b><br />';
    $matriz_bis = $matriz;
    sort($matriz_bis);
    foreach($matriz_bis as $valor)
	   { echo "$valor<br />"; }
    // Clasificación natural
    echo '<b>Clasificación natural:</b><br />';
    $matriz_bis = $matriz;
    sort($matriz_bis,SORT_NATURAL);
    foreach($matriz_bis as $valor)
	   { echo "$valor<br />"; }
    ?>

    
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
    $lista = implode(', ',$colores);
      // separador = coma+espacio
    echo $lista;
    ?>

    <h1>max()</h1>
    <?php
    echo max(['azul','blanco','rojo']),'<br />'; 
    echo ([pow(2,3),pow(3,2),2*3,2+3]); 
    ?>

    <h1>min()</h1>
    <?php
    echo min(['azul','blanco','rojo']),'<br />'; 
    echo min([pow(2,3),pow(3,2),2*3,2+3]); 
    ?>

    <h1>str_split()</h1>
    <?php
    $cadena = 'A1B2C3';
    $matriz = str_split($cadena,2);
    foreach($matriz as $clave => $valor) {
      echo "\$matriz[$clave] = $valor<br>";
    }
    ?>
    
    <h1>array_column() (novedad)</h1>
    <?php
    $artículos = [
      ['identificador' => 10, 'texto' => 'Albaricoques', 'precio' => 35],
      ['identificador' => 20, 'texto' => 'Cerezas',  'precio' => 48],
      ['identificador' => 30, 'texto' => 'Fresas',  'precio' => 29],
      ['identificador' => 40, 'texto' => 'Melocotones',   'precio' => 37]];
    echo '<b>Columna de textos:</b><br />';
    $textos = array_column($artículos,'texto');
    foreach($textos as $clave => $valor) {
      echo "[$clave] = $valor<br>";
    }
    echo '<b>Columna de precios utilizando el texto como índice:</b><br />';
    $precio = array_column($artículos,'precio','texto');
    foreach($precio as $clave => $valor) {
      echo "[$clave] = $valor<br>";
    }
    ?>

    </div>
  </body>
</html>
