<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonController extends Controller
{

    public function index()
    {
        $pokemonId = ['id']; 
        $client = new Client();
        $response = $client->get('https://pokeapi.co/api/v2/pokemon?limit=30');
        $pokemons = json_decode($response->getBody(), true)['results'];

        foreach ($pokemons as &$pokemon) {
            $detailsResponse = $client->get($pokemon['url']);
            $pokemonDetails = json_decode($detailsResponse->getBody(), true);
            $pokemon['id'] = $pokemonDetails['id'];
            $pokemon['image'] = $pokemonDetails['sprites']['front_default'];
        }

        return view('pokemon.index', compact('pokemonId', 'pokemons'));
    }

    public function favoritos()
{
    $user = auth()->user();
    $userFavoritos = $user->favoritos; 
    
    return view('pokemon.favoritos', compact('userFavoritos'));
}

    
    public function addToFavoritos(Request $request, $pokemonId)
    {
        $user = auth()->user();

        $user->favoritos()->attach($pokemonId);

        return redirect()->route('pokemon.index')->with('success', '¡Pokémon añadido a favoritos!');
    }

    // Otras funciones del controlador...

    public function removeFromFavoritos($pokemonId)
    {
        $user = auth()->user();
        $user->favoritos()->detach($pokemonId);

        return back()->with('success', '¡Pokémon eliminado de favoritos!');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
