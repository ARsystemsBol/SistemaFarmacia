<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="App Sistema de Farmacia Laravel 11">
        <meta name="author" content="A.R. Systems Bolivia">

        <title> SIS FARMA</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('farmacia2_favicon.png') }}">
        <!-- Si utilizamos la plantilla sb admin-->
        {{-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> --}}
        
        {{-- FONTAWESOME --}}
        <script src="https://kit.fontawesome.com/1ea8486269.js" crossorigin="anonymous"></script>
        {{-- TAILWIND --}}
        <script src="https://cdn.tailwindcss.com"></script>
</head>
    <body id="page-top">      
        @yield('header')
        <div class="content">
            @yield('content')
        </div>
        
        {{-- @yield('footer') --}}
    </body>
</html>

