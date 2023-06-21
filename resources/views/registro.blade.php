<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
            font-family: 'Nunito', sans-serif;
            height: 100vh;
        }
        </style>
</head>
<body style="background: linear-gradient(#1b1b17, #6c5f51);">
<div style="width: 100%; height: 96vh" class="d-flex flex-row justify-content-center alilgn-items-center">
        <div class="card bg-black" style="width: 50%; height: 95vh; border: 2px solid #000000;">
        <div class="card-header text-center fs-1 fw-bold" style="background-color: #d7bbad;">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen" style="width: 80px; height: 80px; margin-right: 30px;">
                LE CHAT AFFAMÉ
            </div>

            <div class="card-body text-white d-flex flex-column justify-content-between alilgn-items-center" style="width: 100%;">
                    <div class="" style="height: 60%; width: 100%">
                        <form method="POST" action="{{ route('registrar') }}">
                            @csrf

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="name" style="width:9rem" class="mt-5 mb-1">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror mt-5 mb-1" name="nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="email" style="width:9rem" class="mt-2 mb-1">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mt-2 mb-1" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="telefono" style="width:9rem" class="mt-2 mb-1">Nº Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control @error('text') is-invalid @enderror mt-2 mb-1" name="telefono" required>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="password" style="width:9rem" class="mt-2 mb-1">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mt-2 mb-1" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-center alilgn-items-center mt-5">
                                <div class="">
                                    <button type="submit" class="btn mx-5" style="background-color: #d7bbad;">
                                        Registro
                                    </button>
                                </div>
                                <div class="">
                                    <a href="/" class="mx-5 btn text-white bg-secondary" style="text-decoration: none;">Iniciar Sesión</a>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="d-flex flex-row justify-content-around alilgn-items-center">
                            <img src="{{ asset('img/huellaregistro.jpg') }}" style="width:70%; height: 40vh; margin-bottom: 20px;">
                        </div>
                    </div>
        </div>

       
    </div>

    <div>
    @extends('footer')
    </div>
</body>
</html>