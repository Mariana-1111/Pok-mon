<!-- pokemon/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de 20 Pokémon</title>
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
        .titulo{
        width: 25%;
        margin-left: 50%;
        margin-top: 5%;
        }
    </style>
</head>

<body>
    <h1 class="titulo">Pokémon</h1>

    <table>
        @foreach (collect($pokemons)->chunk(10) as $row)
            <tr>
                @foreach ($row as $pokemon)
                    <td>
                        <img class="poke mb-5" src="{{ $pokemon['image'] }}" alt="{{ $pokemon['name'] }}">
                        <p>{{ $pokemon['name'] }}</p>
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>

</html>
