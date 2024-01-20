<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        img {
            width: 100px;
            height: 100px;
        }

        .titulo {
            width: 25%;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="titulo">Pokémon</h1>

    <table>

        @foreach (collect($pokemons)->chunk(7) as $row)
        <tr>
            @foreach ($row as $pokemon)
            <td>
                <img class="poke mb-5" src="{{ $pokemon['image'] }}" alt="{{ $pokemon['name'] }}">
                <p>{{ $pokemon['name'] }}</p>

                <form action="{{ route('pokemon.addToFavoritos', $pokemon['id']) }}" method="POST">
                    @csrf
                    <button type="submit">Agregar a favoritos</button>
                </form>

            </td>
            @endforeach
        </tr>
        @endforeach
    </table>
</body>

</html>