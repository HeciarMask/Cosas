<?php
include ("arrays.php");

if(isset($_POST['ciudad'])){
    $ciudad = $_POST['ciudad'];

    echo "Selección: $ciudad;
        <table border='solid'>
        <tr><th>Visitantes</th></tr> ";

    foreach($arraygeneral as $nombres => $ciudades){
        if(in_array($ciudad, $ciudades) == 1){
            echo "<tr><th> $nombres </th></tr>";
        }
    }

    echo "</table>";

}else{
    
        echo "<form name='ciudades' action='por_ciudad.php' method='post'>
            Ciudad: <select name='ciudad'>";

        foreach($arrayciudades as $i){
            echo "<option>$i</option>";
        }

        echo "</select><input type='submit' value='Consultar'></form>";

}?>