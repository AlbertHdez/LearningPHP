<?php

       $num1 = 10;
       $num2 = 20;

       function multiply($a, $b){
           if(gettype($a) != "integer" || gettype($b) != "integer"){
                echo "Introduce solo numeros";
                return null;
           }
            return $a * $b;
       }

       echo multiply($num1, '');
       echo multiply($num1, $num2);
?>