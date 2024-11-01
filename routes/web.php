<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/random', [PokemonController::class, 'showRandom'])->name('pokemon.show');
Route::get('/pokedex', [PokemonController::class, 'showViewedPokemons'])->name('pokedex.index');