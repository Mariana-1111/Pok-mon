<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pokémon</title>

    <style>
    
        .imagen {
        width: 50%;
        margin-left: 25%;
        margin-top: 5%;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .salir,
        .pokemon {
            background-color: black;
        }
    </style>
</head>

<body>
    <div>
        <img class="imagen mb-5" src="{{asset('assets/pokemon.png')}}" alt="logo">
    </div>

    <div class="button-container">
        <a class="button salir" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Salir') }}
        </a>

        <a class="button pokemon" href="{{ route('pokemon.index') }}">
            {{ __('Ver Pokémon') }}
        </a>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>

</html>
