<!-- favoritos.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pokémon Favoritos</title>
</head>
<body>

    <h1>Mis Pokémon Favoritos</h1>

    @foreach ($userFavoritos as $favorite)
        <div>
            <p>Usuario ID: {{ $favorite->user_id }}</p>
            <p>Pokémon ID: {{ $favorite->pokemon_id }}</p>
            <!-- Puedes agregar más detalles según sea necesario -->
            <form method="POST" action="{{ route('pokemon.removeFromFavorites', $favorite->pokemon_id) }}">
                @csrf
                @method('POST')
                <button type="submit">Quitar de Favoritos</button>
            </form>
        </div>
    @endforeach

</body>
</html>
