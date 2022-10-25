<!-- 1) Realizar un script para crear –en tu base de datos practicas– una tabla a la que llamaremos tabla1 que
recoja , los siguientes datos de alumnos de bachillerato: DNI (con letra incluida), nombre, apellidos
(en campos diferentes), fecha de nacimiento y una columna repite que indicará si el alumno es o no
repetidor con los valores respectivos S y N. La clave primaria es DNI. -->
<?php
$conexion = mysqli_connect ("localhost", "root", "","practicas") or die("No ha conectado.");

$crear = "CREATE OR REPLACE TABLE `practicas`.`tabla1` ( 
    `DNI` VARCHAR(9) NOT NULL , 
    `nombre` VARCHAR(20) NOT NULL , 
    `apellidos` VARCHAR(20) NOT NULL , 
    `fechaNac` DATE NOT NULL , 
    `repetidor` BOOLEAN NOT NULL , 
    PRIMARY KEY (`DNI`));";

    if(mysqli_query($conexion, $crear)){
        echo "Se ha creado la tabla.";
    }else{
        echo "No se ha creado la tabla.";
    }
?>