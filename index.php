<?php

require __DIR__ . '/pokemons/app/controllers/PokemonController.php';


$controller = new PokemonController();
$controller->index();

