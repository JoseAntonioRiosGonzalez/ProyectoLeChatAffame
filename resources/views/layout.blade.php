<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Le Chat Affamé</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul id="menu-navegacion" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-inicio')" href="{{ url('/') }}">INICIO</a>
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
                        <a class="nav-link @yield('menu-activo-resenas')" href="{{ url('/resenas') }}">RESEÑAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-activo-reservas')" href="{{ url('/reservas') }}">RESERVAS</a>
                    </li>
                </ul>
                <button id="cambiarTextoBtn" class="btn btn-primary ml-auto">ESP<->ENG</button>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container">
        @yield('content')
    </div>

    <footer style="background-color: #d7bbad; padding: 20px; text-align: center;">
        <p>Sitio web creado por José Antonio Ríos González. Todos los derechos reservados.</p>
    </footer>

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
    </script>
</body>
</html>
