
<?php
 class persona {
 // Definición de los atributos.
 protected $trabajo; // trabajo del usuario
 protected $nombre; // nombre del usuario
 protected $colores; // array con colores favoritos del usuario

 public function __construct($unNombre,$unTrabajo,$unosColores) {
 // Recibe tres String e instancia un nuevo objeto de la clase con los valores de los parámetros
    $this->nombre = $unNombre;
    $this->trabajo = $unTrabajo;
    $this->colores = explode("*",$unosColores);
 }
 // - método que da información sobre el usuario
 public function informacion() {
    $salida = "Me llamo ". $this->nombre .", soy ". $this->trabajo .":";
    $salida .= "y mis colores favoritos son:\n<ul>";
    sort($this->colores);

    foreach($this->colores as $color){
        $salida .= "<li>".$color."</li>";
    }
    $salida .= "</ul>";

    return $salida;
 }
 }

 $yo = new persona('Juan','Profesor','blanco*azul*rojo');
 echo $yo->informacion();

 /* echo "<pre>";
 print_r($yo);
 echo "</pre>"; */

/* si Instancio un nuevo objeto
 $yo = new persona('Juan','Profesor','blanco*azul*rojo');
Y muestro la información:
 echo $yo->información();
 Debe salir:
*/
?>