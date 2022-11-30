<?php
require_once("funcionesBD.php");
echo "
    <table border='solid'>
        <tr>
            <th colspan=5>Movies</th>
        </tr>
        <tr>
            <td>Título</td>
            <td>Género</td>
            <td>Actor Principal</td>
            <td>Director</td>
            <td colspan=2>Año</td>
        </tr>";

        $conexion = new mysqli("localhost", "root", "", "filmes");
        $cadSQL = "SELECT peli_nombre, peli_tipo, peli_actor_principal, peli_director, peli_anno FROM peliculas";
        $resultado = $conexion->query($cadSQL);
        while($fila = $resultado->fetch_assoc()){
            $actor = obtenerValorColumna("gente", "gente_id", $fila["peli_actor_principal"], "nombre");
            $director = obtenerValorColumna("gente", "gente_id", $fila["peli_director"], "nombre");
            $genero = obtenerValorColumna("tipos_peli", "tipo_id", $fila["peli_tipo"], "label");
            echo "
                <tr>
                    <td>".$fila["peli_nombre"]."</td>
                    <td>".$genero."</td>
                    <td>".$actor."</td>
                    <td>".$director."</td>
                    <td>".$fila["peli_anno"]."</td>
                    <td><a href='#'>EDIT</a></td>
            ";
        }

echo "</table>
";
?>