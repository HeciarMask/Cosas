<?php
/* Conectar con servidor de la base de datos y seleccionar una base de datos*/
$conexion = mysqli_connect("localhost","root","","ejemplos") or die ("No conecta");

/* Guardar en una variable la instruccion que queremos ejecutar */
$consulta = "SELECT id, titulo, texto, fecha FROM noticias WHERE categoria='promociones'";

/* Enviar la Instrucción a mySQL */
$resultado = mysqli_query($conexion, $consulta);
/* $resultado es un objeto de la clase mysqli_result, basicamente un 
cursor la cual tiene incorporado metodos para su manejo */

/* Obtener y procesar los resultados
 */?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Titulo</th>
            <th>Texto</th>
        </tr>
    </thead>
    <tbody>
<?php
while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
  extract($fila);
  #echo "<p>$id, $titulo, $texto, $fecha</p>";

  echo "<tr>";
    echo "<td>$id </td>
          <td>$titulo</td>
          <td>$texto</td>
          <td>$fecha</td>";
    
  echo "</tr>"; 

  /* echo "<tr>";
  foreach($fila as $contenido)
    echo "<td>$contenido </td>";
    
  echo "</tr>"; */ 

    #echo "<pre>";print_r($fila);echo "</pre>"; 
}
mysqli_close($conexion);
?></tbody></table>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>';
