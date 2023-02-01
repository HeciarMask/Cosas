<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control A</title>
<link rel="stylesheet" href="miestilo.css">
</head>
<body>
<table  border="1">
<tr bgcolor="#FF9911"><th>DNI</th><th>NOMBRE</th><th>Apellidos</th><th>Sexo</th>
    <th>&nbsp;&nbsp;&nbsp;Idiomas&nbsp;&nbsp;</th><th>Eliminar</th>
    
</tr>
<?php
    foreach ($loscandidatos as $persona) {
	$mostrarSexo=($persona->getSexo()=="h")?"Masculino":"Femenino";
 ?>

      <tr>

        <td><?=$persona->getDni()?></td>

        <td><?=$persona->getNombre()?></td>

        <td><?=$persona->getApellidos()?></td>

        <td><?=$mostrarSexo?></td>

        <td><table>
		<?php
		foreach ($persona->getIdiomas() as $lengua) 
		
		{
			echo "<tr><td>$lengua</td></tr>";
        }
		?>
		</table></td><td>
      <form action="borrar1.php" method="post">
            <input type="hidden" name="dni" value="<?=$persona->getDni()?>">
            <input type="hidden" name="nombre" value="<?=$persona->getNombre()?>">
            <input type="hidden" name="apellidos" value="<?=$persona->getApellidos()?>">
           <button type="submit" name ="borra" value="borrar">Eliminar</button>
          </form>
      
    </td>
        </tr>
<?php
    }
 ?>
     
          <form action="nuevo.php" method="post"> <tr>
			<td colspan="6" align="center"><button type="submit" name="accion" value="NuevoCandidato">Nuevo Candidato</button></td></tr></form>
          </form>
        					
      </tr>
</table>