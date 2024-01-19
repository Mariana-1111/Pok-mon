<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Favoritos;


class PokemonController extends Controller
{

    public function index()
    {
        $client = new Client();
        $response = $client->get('https://pokeapi.co/api/v2/pokemon?limit=30');
        $pokemons = json_decode($response->getBody(), true)['results'];

        foreach ($pokemons as &$pokemon) {
            $detailsResponse = $client->get($pokemon['url']);
            $pokemonDetails = json_decode($detailsResponse->getBody(), true);
            $pokemon['id'] = $pokemonDetails['id'];
            $pokemon['image'] = $pokemonDetails['sprites']['front_default'];
        }

        return view('pokemon.index', compact('pokemons'));
    }
    public function favoritos()
    {
        $userFavoritos = auth()->user()->favoritos;
        return view('pokemon.favoritos', compact('userFavoritos'));
    }
    
    public function addToFavoritos($pokemonId)
    {
        $user = auth()->user();
        $user->favoritos()->attach($pokemonId);
    
        return back()->with('success', '¡Pokémon añadido a favoritos!');
    }
    
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



