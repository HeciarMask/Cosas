<?php 
function mostrarSelect($resultSet)
{
	$nfilas = mysqli_num_rows($resultSet);
	if ($nfilas==0)
		$devuelve="la consulta no ha devuelto ninguna fila";
	else
	{
	$devuelve="<table border='1'>";
	$fila=(mysqli_fetch_assoc($resultSet));
    $devuelve.= "<tr>";	
	foreach ($fila as $nombreColumna=>$contenido)
	{
				$devuelve.= "<th>".$nombreColumna."</th>";
	}
	$devuelve.= "</tr>";	
    	
	
	while ($fila)
	{
		  $devuelve.= "<tr>";
	      foreach ($fila as $contenido)
	      {
				$devuelve.= "<td>".$contenido."</td>";
          }
	      $devuelve.= "</tr>";	
	      $fila=(mysqli_fetch_assoc($resultSet));	
	}
	$devuelve.= "</table>";
	}
	return $devuelve;
}
function obtenerCombo($tabla,$guarda,$muestra) {  
        global $conexion;	
        $arrayCombo = array();
        $sql="SELECT $guarda,$muestra FROM $tabla order by $muestra";
		$resultado =mysqli_query($conexion,$sql);
        while ($row = mysqli_fetch_assoc($resultado)) {
			$indice=$row[$guarda];
			$arrayCombo[$indice] =$row[$muestra];
        }
		return $arrayCombo;
    }

function pintarCombo($arrayOpciones,$nombreCombo)
	{
		echo "<p><select name='".$nombreCombo."'>";
		foreach ($arrayOpciones as $indice=>$valor)
		{
			echo "<option value='".$indice."'>".$valor."</option>";
		}
		echo "</select></p>";
	}
?>