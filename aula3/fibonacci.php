<?php
  
    $x = 0;
    $y = 1;

  
    for ($i = 0; $i < 10; $i++) {
        // número atual da sequência
        echo $x . "<br>";

        // Atualização dos valores de $x e $y 
        $temp = $x + $y; // soma o próximo número 
        $x = $y; // coloca x com o valor de y
        $y = $temp; // coloca y com o próximo número 
    }
?>
