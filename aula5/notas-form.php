<html>
    <body>
        <form method="POST">
            <label for="f1">Nota 1: </label> <input type="number" name="f1"> <br>
            <label for="f2">Nota 2: </label> <input type="number" name="f2"> <br>
            <input type="submit">
        </form>

        <?php
            if(isset($_POST["f1"], $_POST["f2"])) {
                $nota = ($_POST["f1"] + $_POST["f2"]) / 2;
                echo $nota >= 6 ? "Aluno aprovado <br>" : 
                ($nota >= 4 ? "Aluno em recuperação" : 
                ($nota <= 3 ? "Aluno reprovado" : ""));
            }
        ?>
    </body>
</html>
