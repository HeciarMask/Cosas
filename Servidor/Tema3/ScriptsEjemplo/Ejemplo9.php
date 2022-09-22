<?php
	$filas=5; 
	$columnas=3; 
	print ("<table border=2 width=400 align=center>"); 
	while ($filas>0){ 
		echo "<tr>"; 
		while ($columnas>0){
			echo "<td>"; 
			print "fila: ".$filas." columna: ".$columnas; 
			print ("</td>"); 
			$columnas--; 
		} 
		$columnas=3; 
		echo "</TR>"; 
		$filas--; 
	}
	print "</table>"; 
?> 
