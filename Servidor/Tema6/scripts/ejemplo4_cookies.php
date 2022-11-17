<?php 
if (isset ($_COOKIE['entra'] ) )
  {
  if ($_COOKIE['entra']=="yes")
	{print "Gracias por regresar a mi sitio web de nuevo. <p>";
	 setcookie ("entra", "otra vez", time () + 604800);}
  else
	print "Gracias por tu fidelidad.<p>";
  }
  
	else 
	{ 	
		print "Gracias por Probarnos por primera vez.<p>"; 
		setcookie ("entra", "yes", time () + 604800);
	
	}
?>
