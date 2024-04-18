<?php
    for($x = 0; $x <= 10; $x++) {
        echo $x . "<br>";
    }

    $pokemons = array(
        "Pikachu",
        "Bulbasauro",
        "Squirtle",
        "Charmander",
        "Eevee"
    );

    echo count($pokemons) . "<br>";

    for($x = 0; $x < count($pokemons); $x++) {
        echo $pokemons[$x] . "<br>";
    }
?>