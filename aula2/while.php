<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Exc While</title>
    </head>
    <body>
        <?php
           
            $i = 1;
            while($i < 5) {
                echo $i."<br>";
                $i++;
            }

            echo "<br>";

            // break
            $i = 1;
            while($i < 5) {
                if($i == 3) break;
                echo $i . "<br>";
                $i++;
            }
        ?>
    </body>
</html>