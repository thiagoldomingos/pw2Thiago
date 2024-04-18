<html>
    <body>
        <form method="POST">
            <label for="num1">Primeiro número: </label> <input type="number" name="num1"> <br>
            <label for="num2">Segundo número: </label> <input type="number" name="num2"> <br>
            <input type="submit">
        </form>

        <?php
            function isPrimo($numero) {
                if ($numero <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($numero); $i++) {
                    if ($numero % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            if (isset($_POST["num1"], $_POST["num2"])) {
                $num1 = intval($_POST["num1"]);
                $num2 = intval($_POST["num2"]);
                $primos = array_filter(range($num1, $num2), "isPrimo");

                echo "Existem " . count($primos) . " números primos entre $num1 e $num2 <br>";
                echo implode(" ", $primos);
            }
        ?>
    </body>
</html>
