<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .imagen {
        width: 50%;
        margin-left: 25%;
        margin-top: 5%;
    }

    .button-container {
        text-align: center;
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

    .login {
        background-color: black;
    }

    .register {
        background-color: black;
    }
</style>

<body>
    <div>
        <img class="imagen mb-5" src="{{asset('assets/pokemon.png')}}" alt="logo">
    </div>
    <div class="button-container">
        <a href="{{ route('login') }}" class="button login">Login</a>
        <a href="{{ route('register.create') }}" class="button register">Register</a>
    </div>
</body>

</html>
