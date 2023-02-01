<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 2</title>        
       
    </head>
    <body>
	<h3 >RESULTADO DE LA CONSULTA</h3>
<?php
    echo '<h4 >Consultas efectuadas: </h4>';
    if(count($empleados) == 0){
        echo "No se han encontrado empleados con esos criterios<br>";
    }else{
        echo '<table border="1">';
	    echo '<tr><th>Nombre: </th><th>Tipo: </th><th>Departamento </th><th>Localidad: </th><th>Horario: </th></tr>';
        //echo $empleados;
        foreach($empleados as $empleado){
            echo "
                <tr>
                    <td>".$empleado->getNombre()."</td>
                    <td>".$empleado->getTipo()."</td>
                    <td><a href='../Controller/ver_departamento.php?nombre=".$empleado->getnomdepart()."'>".$empleado->getnomdepart()."</a></td>
                    <td>".$empleado->getLocalidad()."</td>
                    <td>".$empleado->getHorario()."</td>
                </tr>
            ";
        }

	    echo '</table>';
    }
	
		
    
        
    
echo "<a href='..\Controller\consultar_empleados.php'>Otra consulta</a>";
?>