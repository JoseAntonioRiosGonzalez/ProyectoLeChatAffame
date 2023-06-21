<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reservas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- Styles -->
        <style>
        body {
            background-color: black;
        }
        nav {
            background-color: #d7bbad;
        }
        .mesa-no-disponible {
    color: red; /* Cambia el color del número de la mesa */
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
                        <a class="nav-link @yield('menu-activo-menu')" href="{{ route('menu') }}">MENÚ</a>
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
                        <a class="nav-link @yield('menu-activo-reservas') fw-bold" href="{{ route('reservas') }}">RESERVAS</a>
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
    <div class="bg-black d-flex flex-row justify-content-between align-items-center" style="width: 100%; margin-left:20px; margin-top:20px">
        
        <div class="d-flex flex-column justify-content-start align-items-start" style="width: 100%;min-height:87.5vh">

            <div class="d-flex flex-column justify-content-start align-items-start" style="width: 100%;">

             

                <div class="d-flex flex-column justify-content-start align-items-start" style="width: 100%;">

                    <form method="POST" action="{{ route('comprobarMesas') }}" style="width: 100%;">
                        @csrf
                        <div class="form-group">
                            <label for="fecha"><span style="color: white;">Fecha:</span></label>
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
                        <form method="POST" action="{{ route('insertarReserva') }}">
                            @csrf
                            @for ($i = 0; $i < 30; $i++)
                                @if ($i % 6 === 0)
                                    <div class="row mx-1">
                                @endif

                                <div class="col mx-2 my-3">
                                    @php
                                        $mesaNumero = $i + 1;
                                        $mesaReservada = isset($mesasReservadas) && in_array($mesaNumero, $mesasReservadas);
                                        $claseMesa = $mesaReservada ? 'mesa-no-disponible' : '';
                                    @endphp

                                    <label>
                                        @if ($mesaReservada)
                                            <input type="checkbox" class="form-check" name="mesas[]" value="{{ $mesaNumero }}" disabled>
                                        @else
                                            <input type="checkbox" class="form-check" name="mesas[]" value="{{ $mesaNumero }}">
                                        @endif
                                        <span class="{{ $claseMesa }}">{{ $mesaNumero }}</span>&nbsp;&nbsp;
                                        <img src="{{ asset('img/iconoMesa.png') }}" style="width:2.3rem;">
                                    </label>
                                </div>

                                @if (($i + 1) % 6 === 0)
                                    </div>
                                @endif
                            @endfor

                            <input type="hidden" name="idUsu" value="{{Session::get('usuario')->idUsu}}">
                            <input type="hidden" name="fecha" value="<?php if(isset($fechaSeleccionada)) echo $fechaSeleccionada ?>">

                            <div class="mb-5">
                                <div>
                                    <p class="fs-5">Seleccione sus posibles alergias</p>
                                </div>
                                <div class="d-flex flex-column justify-content-start align-items-start text-white">
                                        <div class="d-flex flex-row my-1"><input type="checkbox" class="form-check" name="alergias[]" value="crustaceos">Crustáceos</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" class="form-check" name="alergias[]" value="gluten">Gluten</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" class="form-check" name="alergias[]" value="huevo">Huevo</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" class="form-check" name="alergias[]" value="lactosa">Lactosa</div>
                                        <div class="d-flex flex-row my-1"><input type="checkbox" class="form-check" name="alergias[]" value="vegano">Vegano</div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Reservar Mesas</button>
                        </form>
                    </div>

                </div>

                @if (session('mensaje'))
            <div id="alerta" class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

            </div>

            <div class="mt-2" id="codigoPromocion">
                <p class="mt-2 text-white fs-6">Codigo Promocional</p>
                @php 
                    if(Session::get('usuario')->nombre == "admin"){
                @endphp
                <a href="{{ route('insertarPromocion') }}" class="btn btn-secondary">MODIFICAR CÓDIGOS PROMOCIONALES</a>
                @php
                    }
                @endphp

                <form action="{{ route('promocion') }}" method="post">
                    @csrf
                    <input type="text" name="promocion" class="ms-1">
                    <button class="btn bg-primary"><i class="bi bi-check-all text-white fs-4"></i></button>
                </form>
                @if (session('promocionBien'))
                    <div id="alertaPromocionBien" class="alert alert-success">
                        <p>¡Enhorabuena! Este código tiene un 10% de descuento en la consumición total. Enséñelo a la hora de pagar</p>
                    </div>
                @endif
                @if (session('promocionMal'))
                    <div id="alertaPromocionMal" class="alert alert-danger">
                        <p>Código promocional erróneo o previamente utilizado.</p>
                    </div>
                @endif
            </div>
        </div>

        <div class="d-flex flex-row justify-content-center align-items-center">
            <img src="{{ asset('img/fotoReservas.png') }}" style="min-height:80vh;">
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