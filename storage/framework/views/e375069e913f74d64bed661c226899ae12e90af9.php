<!-- resources/views/landing.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Chat Affamé - Restaurante de Lujo</title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
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
                        <a class="nav-link" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MENÚ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CALIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PLANTILLA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">RESEÑAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">RESERVAS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container">
        <!-- Agrega aquí la foto central -->
    </div>

    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtiene el botón de cambio de texto
            var cambiarTextoBtn = document.createElement('button');
            cambiarTextoBtn.classList.add('btn', 'btn-primary', 'ml-auto');
            cambiarTextoBtn.textContent = 'Cambiar Texto';

            // Obtiene el menú de navegación
            var menuNavegacion = document.getElementById('menu-navegacion');

            // Variables para alternar entre los textos
            var textosOriginales = ['INICIO', 'MENÚ', 'CALIDAD', 'PLANTILLA', 'RESEÑAS', 'RESERVAS'];
            var textosAlternativos = ['HOME', 'MENU', 'QUALITY', 'STAFF', 'REVIEWS', 'RESERVATIONS'];
            var indiceTexto = 0;

            // Función para cambiar el texto del menú
            function cambiarTextoMenu() {
                var elementosMenu = menuNavegacion.querySelectorAll('a.nav-link');
                elementosMenu.forEach(function(elemento, index) {
                    elemento.textContent = (indiceTexto % 2 === 1) ? textosOriginales[index] : textosAlternativos[index];
                });
            }

            // Agrega el botón al documento y asigna el evento click
            var container = document.querySelector('.navbar .container');
            container.appendChild(cambiarTextoBtn);
            cambiarTextoBtn.addEventListener('click', function() {
                cambiarTextoMenu();
                indiceTexto++;
            });
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\chat2\resources\views/landing.blade.php ENDPATH**/ ?>