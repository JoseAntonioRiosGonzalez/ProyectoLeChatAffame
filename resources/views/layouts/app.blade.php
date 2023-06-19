<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
        <style>
        body {
            background-color: #1b1b17;
        }
        nav {
            background-color: pink;
        }
    </style>
</head>
<body>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Le Chat Affamé</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul id="menu-navegacion" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-inicio')" href="{{ route('inicio') }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-menu')" href="{{ url('/menu') }}">MENÚ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-calidad')" href="{{ url('/calidad') }}">CALIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-plantilla')" href="{{ url('/plantilla') }}">PLANTILLA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-resenas')" href="{{ route('reseñas') }}">RESEÑAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-reservas')" href="{{ url('/reservas') }}">RESERVAS</a>
                    </li>
                </ul>
                <button id="cambiarTextoBtn" class="btn btn-primary ml-auto">ESP<->ENG</button>
            </div>
        </div>
    </nav>


