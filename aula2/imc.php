<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
</head>
<body>
    <?php
        $peso = 100;
        $altura = 1.90;
        $imc = $peso / ($altura * $altura);
        $classificacao = '';
        $obesidade = '';

        if ($imc < 18.5) {
            $classificacao = "Magreza";
        } elseif ($imc < 25) {
            $classificacao = "Normal";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
            $obesidade = "Grau I";
        } elseif ($imc < 40) {
            $classificacao = "Obesidade";
            $obesidade = "Grau II";
        } else {
            $classificacao = "Obesidade Grave";
            $obesidade = "Grau III";
        }

        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura cm</p>";
        echo "<p>IMC: $imc</p>";

        echo "<br /><p>Classificação: $classificacao</p>";
        if ($imc > 29.9) {
            echo "<p>Obesidade: $obesidade</p>";
        }
    ?>
</body>
</html>
