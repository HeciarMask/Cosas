<?php
require_once("clase0.php");
class personas {
// Definición de los atributos.
protected $lista; //array de objetos de la clase usuario
public function __construct($losUsuarios)
{
$this->lista=$losUsuarios;
}
public function graficar() {
	echo "<table border='1'>";
	foreach ($this->lista as $unUsuario)
	{
		echo "<tr>";
		echo "<td>".$unUsuario->getNombre()."</td>";
		echo "<td>".$unUsuario->getTrabajo()."</td>";
		echo "<td>".$unUsuario->getColores()."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
}

$datos[] = new usuario('Juan','Profesor','blanco*azul*rojo');
$datos[] = new usuario('Pepe','Informático','rosa*azul*amarillo*naranja*verde');
$datos[] = new usuario('Luis','Mecánico','marrón*verde*gris*naranja');
$lasPersonas=new personas($datos);
$lasPersonas->graficar();
/*echo "<pre>";
print_r($lasPersonas);
echo "</pre>";
*/

?>