<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Styles -->
        <style>
        body {
            background-color: #1b1b17;
        }
        nav {
            background-color: #d7bbad;
        }
        .mesa-no-disponible {
    color: red; /* Cambia el color del número de la mesa */
    /* Agrega cualquier otro estilo visual que desees para indicar que la mesa no está disponible */
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
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-inicio'); ?>" href="<?php echo e(route('inicio')); ?>">INICIO</a>
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
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-resenas'); ?>" href="<?php echo e(route('reseñas')); ?>">RESEÑAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menu-activo-reservas'); ?> fw-bold" href="<?php echo e(route('reservas')); ?>">RESERVAS</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>"><button>Cerrar sesión</button></a>
                    </li>
                </ul>
                <button id="cambiarTextoBtn" class="btn btn-primary ml-auto">ESP<->ENG</button>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="bg-black d-flex flex-row justify-content-between align-items-center" style="width: 100%;">
        
        <div class="d-flex flex-column justify-content-start align-items-start" style="width: 100%;min-height:100vh">

            <div class="d-flex flex-column justify-content-start align-items-start" style="width: 100%;">

                <div class="fs-5" style="width: 100%; border-bottom:2px solid white">
                    <p class="text-white fw-bold mt-3 text-center">DISPONIBILDAD GENERAL</p>
                </div>

                <div class="d-flex flex-column justify-content-start align-items-start" style="width: 100%;">
                    <h1 class="text-white">Reserva de Mesas</h1>

                    <form method="POST" action="<?php echo e(route('comprobarMesas')); ?>" style="width: 100%;">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required style="width: 30%;">
                        </div>
                        <div class="d-flex flex-row justify-content-start align-items-center text-white" style="width: 100%;">
                            <div>
                                <button type="submit" class="btn btn-primary">Comprobar Disponibilidad</button>
                            </div>
                            <div style="margin-left:10%">
                                <p class="mt-2 fs-4">Disponibilidad para el dia <b id="fechaSeleccionadaB"><?php if(isset($fechaSeleccionada)) echo $fechaSeleccionada ?></b></p>
                            </div>
                        </div>
                    </form>

                    <div class="d-flex flex-row justify-content-start align-items-start text-white">
                        <form method="POST" action="<?php echo e(route('insertarReserva')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php for($i = 0; $i < 30; $i++): ?>
                                <?php if($i % 6 === 0): ?>
                                    <div class="row mx-1">
                                <?php endif; ?>

                                <div class="col mx-2 my-3">
                                    <?php
                                        $mesaNumero = $i + 1;
                                        $mesaReservada = isset($mesasReservadas) && in_array($mesaNumero, $mesasReservadas);
                                        $claseMesa = $mesaReservada ? 'mesa-no-disponible' : '';
                                    ?>

                                    <label>
                                        <?php if($mesaReservada): ?>
                                            <input type="checkbox" name="mesas[]" value="<?php echo e($mesaNumero); ?>" disabled>
                                        <?php else: ?>
                                            <input type="checkbox" name="mesas[]" value="<?php echo e($mesaNumero); ?>">
                                        <?php endif; ?>
                                        <span class="<?php echo e($claseMesa); ?>"><?php echo e($mesaNumero); ?></span>&nbsp;&nbsp;
                                        <img src="<?php echo e(asset('img/iconoMesa.png')); ?>" style="width:3rem;">
                                    </label>
                                </div>

                                <?php if(($i + 1) % 6 === 0): ?>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <input type="hidden" name="idUsu" value="<?php echo e(Session::get('usuario')->idUsu); ?>">
                            <input type="hidden" name="fecha" value="<?php if(isset($fechaSeleccionada)) echo $fechaSeleccionada ?>">

                            <div class="mb-5">
                                <div>
                                    <p class="fs-3">Seleccione Sus Posibles Alergias</p>
                                </div>
                                <div class="d-flex flex-column justify-content-start align-items-start text-white">
                                        <div class="d-flex flex-row my-1"><input type="checkbox" name="alergias[]" value="crustaceos">Crustáceos</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" name="alergias[]" value="gluten">Gluten</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" name="alergias[]" value="huevo">Huevo</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" name="alergias[]" value="lactosa">Lactosa</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" name="alergias[]" value="vegano">Vegano</div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Reservar Mesas</button>
                        </form>
                    </div>

                </div>

                <?php if(session('mensaje')): ?>
            <div id="alerta" class="alert alert-success">
                <?php echo e(session('mensaje')); ?>

            </div>
        <?php endif; ?>

            </div>

            <div class="mt-5" id="codigoPromocion">
                <p class="mt-5 text-white fs-2">Codigo Promocional</p>
                <?php 
                    if(Session::get('usuario')->nombre == "admin"){
                ?>
                <a href="<?php echo e(route('insertarPromocion')); ?>" class="btn btn-secondary">INSERTAR NUEVO CODIGO PROMOCIONAL</a>
                <?php
                    }
                ?>

                <form action="<?php echo e(route('promocion')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="promocion" class="ms-1">
                    <button class="bg-primary"><i class="bi bi-check-all text-white fs-4"></i></button>
                </form>
                <?php if(session('promocionBien')): ?>
                    <div id="alertaPromocionBien" class="alert alert-success">
                        <p>¡Enhorabuena! Este código tiene un 10% de descuento en la consumición total. Enséñelo a la hora de pagar</p>
                    </div>
                <?php endif; ?>
                <?php if(session('promocionMal')): ?>
                    <div id="alertaPromocionMal" class="alert alert-danger">
                        <p>Código promocional erróneo o previamente utilizado.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="d-flex flex-row justify-content-center align-items-center">
            <img src="<?php echo e(asset('img/fotoReservas.png')); ?>" style="min-height:100vh">
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



        function ponerFecha(){
            divMesas.style.display = "block";
        }

        const alerta = document.getElementById('alerta');

        if (alerta) {
            setTimeout(function() {
                alerta.style.display = 'none';
            }, 4000);
        }

    </script>
</body>
</html>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\resources\views/reservas.blade.php ENDPATH**/ ?>