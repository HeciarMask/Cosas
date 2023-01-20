<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-type' content="text/html";charset=utf8>
</head>
<body>
    <h3>Resultado de la consulta</h3><br>
    <thead>
        <th>Zona: <?=$lasViviendas[0]->getNombreZona() ?></th>
        <th>Calle: <?=$lasViviendas[0]->getCalle() ?></th>
    </thead>
    <table border='solid'>
    <?php
/* echo "<pre>";
print_r($lasViviendas);
echo "</pre>"; */
    foreach($lasViviendas as $unaVivivenda){?>
        <tr>
            <td><?=$unaVivienda->getNumero() ?></td>
            <td><?=$unaVivienda->getTipoVivienda() ?></td>
            <td><?=$unaVivienda->getCodigoPostal() ?></td>
            <td><?=$unaVivienda->getMetros() ?></td>
        </tr>
    <?php}?>
    
    </table>
</body>
</html>