<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .button-container {
        text-align: left;
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
    .salir{
        background-color: black;
    }

</style>
<body>
    <div class="button-container">
        <a class="button salir " href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Salir') }}
            
        </a>
    </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

</body>

</html>