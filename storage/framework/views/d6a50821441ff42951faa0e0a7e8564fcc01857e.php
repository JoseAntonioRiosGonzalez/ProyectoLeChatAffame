<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
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
            background-color: #d7bbad;
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
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-menu'); ?>" href="<?php echo e(route('menu')); ?>">MENÚ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-calidad'); ?>" href="<?php echo e(route('calidad')); ?>">CALIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-plantilla'); ?>" href="<?php echo e(route('plantilla')); ?>">PLANTILLA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-resenas'); ?>" href="<?php echo e(route('reseñas')); ?>">RESEÑAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-reservas'); ?>" href="<?php echo e(route('reservas')); ?>">RESERVAS</a>
                    </li>
                </ul>
                <button id="cambiarTextoBtn" class="btn btn-primary ml-auto">ESP<->ENG</button>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
        
    <div>
    
    </div>

    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\resources\views/inicio.blade.php ENDPATH**/ ?>