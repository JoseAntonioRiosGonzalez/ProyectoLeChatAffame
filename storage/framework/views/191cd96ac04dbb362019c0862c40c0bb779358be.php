<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
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
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-inicio'); ?>" href="<?php echo e(url('/')); ?>">INICIO</a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link <?php echo $__env->yieldContent('menu-activo-menu'); ?>" href="<?php echo e(url('/menu')); ?>">MENÚ</a>
</li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-calidad'); ?>" href="<?php echo e(url('/calidad')); ?>">CALIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-plantilla'); ?>" href="<?php echo e(url('/plantilla')); ?>">PLANTILLA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-resenas'); ?>" href="<?php echo e(url('/resenas')); ?>">RESEÑAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-reservas'); ?>" href="<?php echo e(url('/reservas')); ?>">RESERVAS</a>
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

    <footer style="background-color: #d7bbad; padding: 20px; text-align: center;">
        <p>Sitio web creado por José Antonio Ríos González. Todos los derechos reservados.</p>
    </footer>

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
<?php /**PATH C:\xampp\htdocs\chat2\resources\views/layout.blade.php ENDPATH**/ ?>