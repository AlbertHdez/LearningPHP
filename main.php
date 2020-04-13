<?php

        // Funciones para string
        $mensaje = "Hoy voy a aprender mucho";
        // Longitud
        echo strlen($mensaje);

        echo '<br>';
        // Numero de palabras
        echo str_word_count($mensaje);
        echo '<br>';
        // Reversa
        echo strrev($mensaje);
        echo '<br>';
        // Encontrar Texto
        echo strpos($mensaje, 'aprender');
        echo '<br>';
        // Remplazar Texto
        echo str_replace('aprender', 'learn', $mensaje);
        echo '<br>';
        // Convertir en minuscula
        echo strtolower($mensaje);
        echo '<br>';
        // Convertir en mayuscula
        echo strtoupper($mensaje);
        echo '<br>';
        // Comparar cadenas
        echo strcmp($mensaje, 'Hoy');
        echo '<br>';
        // Substraer cadenas
        echo substr($mensaje, 10, 8);
        echo '<br>';
        // Remover espacios en blanco
        echo trim("   Hola chuco");

?>