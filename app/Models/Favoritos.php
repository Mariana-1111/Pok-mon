<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pokemon_id',
    ];

    public $timestamps = false;

    public function pokemones()
    {
        return view('pokemon.favoritos', compact('userFavoritos'));
    }
}
