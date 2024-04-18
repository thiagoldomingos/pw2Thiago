<?php
    for($x = 25; $x <= 60; $x++) {
        if($x % 2 == 0) {
            $tipo = "par";
        }
        else {
            $tipo = "impar";
        }
        echo $x . " $tipo" . "<br>";
    }
?>