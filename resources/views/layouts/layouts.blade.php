<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    @include('layouts.partials.header')
    
    <main class="main">
        @include('layouts.mensajes')
        <div class="contenido">
             @yield('contenido')
        </div>
    </main>
   
@yield('js')
@yield('grafico')
</body>
</html>