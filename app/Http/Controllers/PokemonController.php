<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonController extends Controller
{
   // Controlador PokemonController.php
// Controlador PokemonController.php


public function index()
{
    $client = new Client();
    $response = $client->get('https://pokeapi.co/api/v2/pokemon?limit=30');
    $pokemons = json_decode($response->getBody(), true)['results'];

    // Obtener detalles de cada Pokémon, incluyendo la URL de la imagen
    foreach ($pokemons as &$pokemon) {
        $detailsResponse = $client->get($pokemon['url']);
        $pokemonDetails = json_decode($detailsResponse->getBody(), true);
        $pokemon['image'] = $pokemonDetails['sprites']['front_default'];
    }

    return view('pokemon.index', compact('pokemons'));
}


}
