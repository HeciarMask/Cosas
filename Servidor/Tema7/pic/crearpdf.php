<?php
ini_set ("memory_limit","80M");
require_once ("dompdf/dompdf_config.inc.php");
$base="ejemplos";
$consulta="SELECT demo4.DNI,demo4.Nombre,demo4.Apellido1, demo4.Apellido2 ,demodat1.Puntos, demodat2.Puntos, demodat3.Puntos FROM demo4, demodat1, demodat2, demodat3";
$consulta.=" WHERE (demo4.DNI=demodat1.DNI AND demo4.DNI=demodat2.DNI AND demo4.DNI=demodat3.DNI) ORDER BY demodat1.Puntos+demodat2.Puntos+demodat3.Puntos DESC ";
$c=mysqli_connect ("localhost","root","",$base);
$resultado=mysqli_query($c,$consulta);
$mivar="<html><body><h1><center>Listado de puntuaciones</center></h1>";
$mivar.="<table align=center border=2><tr>";
$mivar.="<td colspan=4 align=center> Datos personales</td>";
$mivar.="<td align=center>Prueba 1</td>";
$mivar.="<td align=center>Prueba 2</td>";
$mivar.="<td align=center>Prueba 3</td>";
$mivar.="<td align=center>Puntos Totales</td>";
while($salida = mysqli_fetch_array($resultado)){
	$mivar.="<tr>";
    for ($i=0;$i<7;$i++)
	 {
    	$mivar.="<td>".$salida[$i]."</td>";
     }   
 	 $valor=$salida[4]+$salida[5]+$salida[6];
	 $mivar.="<td>".$valor."</Td></tr>";;
}
mysqli_close($c);
$mivar.="</table></body></html>";
$dompdf = new DOMPDF();
$dompdf->load_html ($mivar);
$dompdf->render ();
$dompdf->stream ("formulario.pdf", array("Attachment" => 0));
?>