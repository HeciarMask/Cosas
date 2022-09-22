<?php
	$i=1; 
	switch ($i) {
		case 0: print "i es igual a 0 - No he puesto el break<br>"; 
		case 1: print "i es igual a 1 - No he puesto el break<br>"; 
		case 2: print "i es igual a 2 - No he puesto el break<br>"; 
}
 	switch ($i) { 
		case 0: 
			print "i es igual a 0 - Ahora lleva break<br>"; 
			break; 
		case 1: 
			print "i es igual a 1 - Ahora lleva break<br>"; 
			break; 
		case 2: 
			print "i es igual a 2 - Ahora lleva break<br>"; 
			break; 
		default:
			print "i no es igual a ninguno<br>"; 
} ?> 
