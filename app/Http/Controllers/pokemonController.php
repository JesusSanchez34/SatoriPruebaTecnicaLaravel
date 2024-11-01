<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Pokemon;

// app/Http/Controllers/PokemonController.php

class PokemonController extends Controller
{
     // Muestra un Pokémon aleatorio y lo guarda en la base de datos
    public function showRandom()
    {
        
            $idPokemon = rand(1, 500);
            $url = "https://pokeapi.co/api/v2/pokemon/{$idPokemon}";
            $pokemonData = Http::get($url)->json();

            // Obtener datos de Pokémon
            $pokemon = [
                'name' => $pokemonData['name'],
                'type' => $pokemonData['types'][0]['type']['name'],
                'image_url' => $pokemonData['sprites']['other']['dream_world']['front_default'],
            ];

            // Guardar en la base de datos
            Pokemon::updateOrCreate(
                ['name' => $pokemon['name']],
                ['type' => $pokemon['type'], 'image_url' => $pokemon['image_url']]
            );

            // Retornar vista con el Pokémon cargado
            return view('pokemon.show', compact('pokemon'));
        

        
    }

 
     // Muestra los Pokémon vistos
     public function showViewedPokemons()
     {
         $pokemons = Pokemon::all();
         return view('pokedex.index', compact('pokemons'));
     }
}





