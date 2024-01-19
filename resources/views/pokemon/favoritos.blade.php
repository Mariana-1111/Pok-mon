<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/pokemon/favorites.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Mis Pokémon Favoritos</h1>

    @foreach ($userFavorites as $favorite)
        <div>
            <p>{{ $favorite->pokemon->name }}</p>
            <!-- Puedes mostrar más detalles o imágenes del Pokémon aquí -->
            <form method="POST" action="{{ route('pokemon.removeFromFavorites', $favorite->pokemon->id) }}">
                @csrf
                <button type="submit">Quitar de Favoritos</button>
            </form>
        </div>
    @endforeach
@endsection

</body>
</html>