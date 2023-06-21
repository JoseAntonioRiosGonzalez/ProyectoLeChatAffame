<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calidad</title>

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
@keyframes  dissolveEffect {
    0% {
        opacity: 0;
        width: 0;
    }
    50% {
        opacity: 1;
        width: 130%;
    }
    100% {
        opacity: 1;
        width: 100%;
    }
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
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-menu'); ?>" href="<?php echo e(route('menu')); ?>">MENÚ</a>
                    </li>

                    <li class="nav-item; mx-4">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-calidad'); ?> fw-bold" href="<?php echo e(route('calidad')); ?>">CALIDAD</a>
                    </li>
                    <li class="nav-item; mx-4">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-plantilla'); ?>" href="<?php echo e(route('plantilla')); ?>">PLANTILLA</a>
                    </li>
                    <li class="nav-item; mx-4">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-resenas'); ?>" href="<?php echo e(route('reseñas')); ?>">RESEÑAS</a>
                    </li>
                    <li class="nav-item; mx-4">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-reservas'); ?>" href="<?php echo e(route('reservas')); ?>">RESERVAS</a>
                    </li>
                   
                    
                </ul>
            </div>

            <button id="cambiarTextoBtn" class="btn btn-primary">LANG</button>
            <ul class="mt-1 mx-5">
                <a href="<?php echo e(route('logout')); ?>" style="text-decoration: none;" class="text-danger mt-5"><strong>LOGOUT</strong></a>
            </ul>

        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="bg-black d-flex flex-column justify-content-between align-items-center" style="width: 100%; height:91vh">
        
        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%;height:40%">

            <div class="d-flex flex-column justify-content-center align-items-center" style="width: 70%;">
                <p class="fs-2 text-white" style="text-shadow: 1px 1px 3px gray">Para nuestro equipo es un placer ofrecerles la mejor calidad y servidio, ampliamente reconocidos como así lo demuestran las 3 estrellas michelín que hemos recibido en nuestro corto trayecto a nivel nacional. El compromiso con nuestro cliente y nuestro afán de mejorar en el día a día sin duda ha conseguido distinguirnos por encima de la competencia. Le aseguramos por ello la mejor atención y calidad de nuestros platos a nuestros comensales. </p>
            </div>

        </div>

        <div class="d-flex flex-row justify-content-between align-items-center" style="width: 100%;height:60%">

                    <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                        <img src="<?php echo e(asset('img/fotoReservas.png')); ?>" style="width: 55%" class="my-5">
                    </div>

                    <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                        <img src="<?php echo e(asset('img/michelin_blanco_negro.jpg')); ?>" style="width: 100%" class="my-5">
                    </div>

                    <div class="d-flex flex-column justify-content-between align-items-center" style="width: 90%;">
                        <img src="<?php echo e(asset('img/logo.png')); ?>" style="width: 55%" class="my-5">
                    </div>
                    
        </div>

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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\resources\views/calidad.blade.php ENDPATH**/ ?>