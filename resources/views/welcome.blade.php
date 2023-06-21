<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido</title>

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
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 96vh;">
        <div class="card" style="width: 50%; border: 2px solid #000000;">
            <div class="card-header text-center fs-1 fw-bold" style="background-color: #d7bbad;">
                <img src="{{ asset('img/logo.png') }}" alt="Imagen" style="width: 80px; height: 80px; margin-right: 30px;">
                LE CHAT AFFAMÉ
            </div>

            <div class="card-body bg-black text-white d-flex flex-column justify-content-between align-items-center">

                <form method="POST" action="{{ route('inicio') }}" class="mb-5">
                    @csrf

                    <div class="form-group row mt-5 mb-5">
                        <label for="email" class="col-md-4 col-form-label text-md-right my-1">Email</label>

                        <div class="col-md-6 my-1">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-5">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6 mb-5">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center align-items-center mb-5">
                        <div class="col-md-8">
                            <button type="submit" class="btn ms-5 fw-bold" style="background-color: #d7bbad;">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div>
                            <a href="{{route('registro')}}" class="btn btn-secondary">Registro</a>
                        </div>
                    </div>

                </form>

                <img src="{{ asset('img/puertaGato.jpg') }}" style="width:70%; height: 50vh" class="mb-5">

            </div>
           
        </div>

      
    
</div>

    <div>
    @extends('footer')
    </div>

</body>

</html>
