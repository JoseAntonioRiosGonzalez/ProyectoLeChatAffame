<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
        <style>
        body {
            background-color: #1b1b17;
        }
        nav {
            background-color: #d7bbad;
        }
        .btn{
    background-color: #898e75 !important;
    border-color: #898e75 !important;
}
    </style>
</head>
<body>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo" class="navbar-logo" style="width:10%">
            <i>LE CHAT AFFAMÉ</i>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="background: linear-gradient(to right, #d7bbad, #b2a490);">
                <ul id="menu-navegacion" class="navbar-nav ml-auto">
                    <li class="nav-item; mx-4">
                        <a class="nav-link @yield('menu-activo-menu') fw-bold" href="{{ route('menu') }}">MENÚ</a>
                    </li>

                    <li class="nav-item; mx-4">
                        <a class="nav-link @yield('menu-activo-calidad')" href="{{ route('calidad') }}">CALIDAD</a>
                    </li>
                    <li class="nav-item; mx-4">
                        <a class="nav-link @yield('menu-activo-plantilla')" href="{{ route('plantilla') }}">PLANTILLA</a>
                    </li>
                    <li class="nav-item; mx-4">
                        <a class="nav-link @yield('menu-activo-resenas')" href="{{ route('reseñas') }}">RESEÑAS</a>
                    </li>
                    <li class="nav-item; mx-4">
                        <a class="nav-link @yield('menu-activo-reservas')" href="{{ route('reservas') }}">RESERVAS</a>
                    </li>
                    
                    
                </ul>
            </div>

            <button id="cambiarTextoBtn" class="btn btn-primary">LANG</button>
            <ul class="mt-1 mx-5">
                <a href="{{ route('logout') }}" style="text-decoration: none;" class="text-danger mt-5"><strong>LOGOUT</strong></a>
            </ul>

        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="bg-black d-flex flex-row justify-content-between align-items-center" style="width: 100%; height:91vh">
        
        <div class="d-flex flex-column justify-content-between align-items-center" style="width: 33%;">

            <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                <img src="{{ asset('img/plato1.jpg') }}" style="width: 70%" class="my-5">
            </div>

            <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                <img src="{{ asset('img/plato2.jpg') }}" style="width: 70%" class="my-5">
            </div>

        </div>

        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 34%;">

            <div class="d-flex flex-column justify-content-center align-items-center" style="width: 80%;">
                <img id="fotoMenu" src="{{ asset('img/menur.jpg') }}" style="width: 100%; display:none">
            </div>

        </div>

        <div class="d-flex flex-column justify-content-between align-items-center" style="width: 33%;">

                    <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                        <img src="{{ asset('img/plato3.jpg') }}" style="width: 70%" class="my-5">
                    </div>

                    <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                        <img src="{{ asset('img/plato4.jpg') }}" style="width: 70%" class="my-5">
                    </div>
                    
        </div>

    </div>
        
    <div>
    @extends('footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cambiarTextoBtn = document.getElementById('cambiarTextoBtn');
            var menuNavegacion = document.getElementById('menu-navegacion');
            var textosOriginales = ['INICIO', 'MENÚ', 'CALIDAD', 'PLANTILLA', 'RESEÑAS', 'RESERVAS'];
            var textosAlternativos = ['HOME', 'MENU', 'QUALITY', 'STAFF', 'REVIEWS', 'RESERVATIONS'];
            var indiceTexto = 0;

            function cambiarTextoMenu() {
                var elementosMenu = menuNavegacion.querySelectorAll('a.nav-link');
                elementosMenu.forEach(function(elemento, index) {
                    elemento.textContent = (indiceTexto % 2 === 1) ? textosOriginales[index] : textosAlternativos[index];
                });
                indiceTexto++;
            }

            cambiarTextoBtn.addEventListener('click', cambiarTextoMenu);
        });

        window.onload = function() {
    var image = document.getElementById("fotoMenu");
    image.style.display = "block";

    var currentWidth = 1;
    var targetWidth = 100;
    var step = 100; // Cálculo del incremento en función de 3 segundos

    var interval = setInterval(function() {
        if (currentWidth >= targetWidth) {
            clearInterval(interval);
        } else {
            currentWidth += step;
            image.style.width = "130%";
        }
    }, 200); // Intervalo de tiempo de 20 milisegundos

};

    </script>
</body>
</html>