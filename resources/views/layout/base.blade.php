<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} :: @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/digital.css') }}"> 
</head>

<body>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Digital">
    </div>
    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>Digital Innovation One - 2020</p>
    </footer>
</body>

</html>