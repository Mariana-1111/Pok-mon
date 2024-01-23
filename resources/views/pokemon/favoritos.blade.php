<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Mis Pokémon Favoritos</h1>

    @foreach ($userFavoritos as $favorite)
        <div>
            <p>{{ $favorite->id }}</p>
            <form method="POST" action="{{ route('pokemon.removeFromFavorites', $favorite->pokemon->id) }}">
                <button type="submit">Quitar de Favoritos</button>
            </form>
        </div>
    @endforeach

</body>
</html>