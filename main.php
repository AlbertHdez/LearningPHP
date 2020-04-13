<?php

        $frutas = array('Melocoton', 'Sandia', 'Manzana', 'Guayaba');

        print_r($frutas);

        for($i = 0; $i < count($frutas); $i++){
            echo '<br>';
            echo $frutas[$i];
        }

        $crushes = array(
            "Raquel" => 19,
            "Aly" => 19,
            "Andrea" => 19,
            "Alondra" => 18,
            "Martha" => 17
        );

        print_r($crushes);

        foreach($crushes as $crush){
            echo '<br>' . $crush;
        }
?>