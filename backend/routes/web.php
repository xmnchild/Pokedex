<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemon/{id}', [PokemonController::class, 'show']);

Route::get('/pokemon', [PokemonController::class, 'index']);


