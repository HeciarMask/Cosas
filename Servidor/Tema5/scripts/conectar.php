<?php
    try{
     $bd= new PDO('mysql:host=localhost;dbname=dwes;charset=utf8','root','');
	 echo"conectado";
    }catch(PDOException $ex){
      echo 'No se pudo conectar con la base de datos.<br>';
	  echo "Se ha producido el siguiente error: ".$ex->getMessage();

    }


