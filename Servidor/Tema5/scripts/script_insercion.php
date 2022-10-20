<?php
$base="ejemplos"; 

$tabla="demo4"; 

$v1=$_POST['p_v1']; 
$v2=$_POST['p_v2']; 
$v3=$_POST['p_v3']; 
$v4=$_POST['p_v4']; 

foreach ($_POST['p_v5'] as $valor){ 
$nacimiento[]=$valor; 
} 

$v5=$nacimiento[2]."-".$nacimiento[1]."-".$nacimiento[0]; 

$v6=$_POST['p_v6']; 

foreach ($_POST['p_v7'] as $valor){ 
$hora[]=$valor; 
} 

$v7=$hora[0].":".$hora[1].":".$hora[2]; 

$v8=$_POST['p_v8'];
$v9=0;
foreach($_POST['p_v9'] as $valor) { 
$v9=$v9+$valor; 
}; 

$c=mysqli_connect("localhost","root","",$base); 



# AÑADIMOS EL NUEVO REGISTRO 
/* CUIDADO..... 
   SOLO LAS VARIABLES NUMERICAS VAN SIN COMILLAS AL INSERTAR LOS VALOES 
   OBSERVA EN VALUES QUE LAS VARIABLES NO NUMERICAS SE INSERTAN 
   ENTRE COMILLAS..... */ 

mysqli_query($c,"INSERT $tabla (DNI,Nombre,Apellido1,Apellido2, Nacimiento,Sexo,Hora,Fumador,Idiomas) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')"); 

if (mysqli_errno($c)==0){echo "<h2>Registro AÑADIDO</b></H2>"; 
             }else{ 
        if (mysqli_errno($c)==1062){echo "<h2>No ha podido añadirse el registro<br>Ya existe un campo con este DNI</h2>"; 
            }else{ 
            $numerror=mysqli_errno($c); 
            $descrerror=mysqli_error($c); 
            echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>"; 
        } 

} 

mysqli_close($c); 

?> 
       

