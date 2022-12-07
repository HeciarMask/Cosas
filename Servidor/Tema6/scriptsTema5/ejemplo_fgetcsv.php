<?xml version="1.0" encoding="iso-8859-1">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ejemplo csv</title>
  <style type="text/css">
   th { background-color: #999;}
   .odd_row { background-color: #EEE; }
   .even_row { background-color: #FFF; }
  </style>
  </head><body>
<?php

$fichero_entrada=fopen("fichero.csv","r");	
echo "<table border='1'> <tr><th>Título </th><th>Género </th><th>Año</th></tr>";	
while ($row = fgetcsv($fichero_entrada,",")) 
{
    echo '<tr><td >'. $row[0].'</td><td >'.$row[1].'</td><td >'.$row[2].'</td></tr>';
}

	fclose($fichero_entrada);
?>
</html>
</body>