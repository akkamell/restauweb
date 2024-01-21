<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Restau Website</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
    <div class="navbar">
        <h1 >Welcome to Restau Website</h1>
        <a href="login">Log In</a>
    </div>

   
        @yield('content')

    </body>
</html>
