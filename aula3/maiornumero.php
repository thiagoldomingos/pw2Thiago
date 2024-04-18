<?php
    $numeros = array(0, 1, 2, 3, 4, 5, 7, 10);

    $maior = $numeros[0];


    foreach($numeros as $numero) {
        //  atualiza a variavel 
        if($numero > $maior) {
            $maior = $numero;
        }
    }

    echo "Maior Número: " . $maior;
?>
