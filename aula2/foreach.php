<!DOCTYPE html>
<html>
    <head>
        <title> ForEach</title>
    </head>
    <body>
        <?php
            $pokemons = array(
                "Pikachu",
                "Bulbasauro",
                "Squirtle",
                "Charmander",
                "Eevee"
            );

            foreach($pokemons as $pokemon) {
                if($pokemon !== "Eevee") {
                    echo $pokemon . "<br>";
                }
                else {
                    echo "Esse não <br>";
                }
            }
        ?>
    </body>
</html>