<?php
//definir a função e o valor da função (a, b)
function ichigo ($a,$b) {

$gon = $a + $b;

if ($gon < 0){ //se ($gon a soma de $a + $b) for menor que 0 {no caso seria negativo}vai retornar a 0.
    return 0;
} else {
    return $gon; // se nao vai retornar a soma normal 
        }
}
$tudo = ichigo (-541, 10); //chamo o nome da minha função e declaro um parametro para as variaveis declaradas.

echo "resultado é: " . $tudo; 
