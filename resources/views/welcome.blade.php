<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.imagen{
    width: 50%;
    margin-left: 25%;
    margin-top:5%
}
.login,
.register
{
    border-bottom: none;
}
.login{
    margin-left:50%;
}
.register{
    margin-left:50%;
}

</style>
<body>
    <div >
        <img class="imagen text-center mb-5" src="{{asset('assets/pokemon.png')}}"  alt="logo">
    </div>
    <div >        
        <a href="{{ route('login') }}" class="login">Log in</a>
        
        <a href="{{route('register')}}" class="register">Register</a>
    </div>
</body>
</html>