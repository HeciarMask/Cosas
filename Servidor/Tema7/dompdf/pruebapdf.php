<?php 
# Cargamos la librería dompdf.
ini_set ("memory_limit","80M");
require_once ("dompdf/dompdf_config.inc.php");

# Contenido HTML del documento que queremos generar en PDF.
$html='<html><body>
<h2>Ingredientes para muchos postres.</h2>
<p>Ingredientes:</p>
<dl>
<dt>Chocolate</dt>
<dd>Cacao</dd>
<dd>Azucar</dd>
<dd>Leche</dd>
<dt>Caramelo</dt>
<dd>Azucar</dd>
<dd>Colorantes</dd>
</dl>
';
//echo $html; 
# Instanciamos un objeto de la clase DOMPDF.
$dompdf = new DOMPDF();
$dompdf->load_html ($html);
$dompdf->render();
$dompdf->stream ("prueba.pdf", array("Attachment" => 0));
 
# Cargamos el contenido HTML.
 
# Renderizamos el documento PDF.

 
# Enviamos el fichero PDF al navegador.


?>