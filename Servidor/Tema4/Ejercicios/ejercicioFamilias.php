<?php
    $familias = array(
        "Los Simpsons" => array(
            "Padre" => "Homer",
            "Madre" => "Marge",
            "Hijos" => array(
                1 => "Bart",
                2 => "Lisa",
                3 => "Maggie"
            )
        ),
        "Los Griffins" => array(
            "Padre" => "Peter",
            "Madre" => "Lois",
            "Hijos" => array(
                1 => "Chris",
                2 => "Stewie",
                3 => "Megatron"
            )
        )
    );

    foreach($familias as $familia => $miembros){
        echo "
            <ul>
                <li>$familia</li>
                <ul>
        ";
        foreach($miembros as $parentesco => $nombres){
            echo "<li>$parentesco: ";
            if(is_array($nombres)){
                echo "
                    <ul style='list-style-type:none;'>
                ";
                foreach($nombres as $numero => $nombre){
                    echo "
                        <li>$numero.$nombre</li>
                    ";
                }
                echo "
                    </ul>
                ";
            }else{
                echo "
                    $nombres</li>
                ";
            }
        }
        echo "
                </ul>
            </ul>
        ";
    }
?>