<?php
 // Definición de una clase base.
require_once("clase0.php");
 class personas {
 // Definición de los atributos.
protected $lista; //array de objetos de la clase usuario
 public function __construct($losUsuarios)
{
$this->lista=$losUsuarios;
}

 public function graficar() {
 }
 }
/* Si ejecuto
$datos[] = new usuario('Juan','Profesor','blanco*azul*rojo');
$datos[] = new usuario('Pepe','Informático','rosa*azul*amarillo*naranja*verde');
$datos[] = new usuario('Luis','Mecánico','marrón*verde*gris*naranja');
$lasPersonas=new personas($datos);
 $lasPersonas->graficar();
Debe salir
 */
 ?>