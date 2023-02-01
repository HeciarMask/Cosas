<?php
function cabecera($texto) 
{
    print "
<head>
 <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <title>".utf8_encode("Menú")." - ".utf8_encode($texto)."</title>
  <link href=\"../view/css/miestilo.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>

<body>
<div id='envoltorio'>
<div id='cabecera'>
		<div id='titulo'>
			$texto
		</div>
	</div>


<div id=\"menu\">
<ul>
   <font size=1>
  <li><a href=\"../Controller/matricular1.php\">Matricular alumnos actividad</a></li>
  <li><a href=\"../Controller/consultar1.php\">Consultar</a></li>  </font>
</ul>  
</div>


</div>";
}

function pie() 
{
    print '</div>

<div id="pie">
<address>'.
 utf8_encode("2º D.A.W.") .'
</address>

</div>
</body>
</html>';
}
