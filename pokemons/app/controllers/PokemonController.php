<?php



require __DIR__ . '/../models/Pokemon.php';


class PokemonController
{
    public function index()
    {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->getAllPokemons();
        require __DIR__ . '/../views/pokemon_list.php';
    }
}

