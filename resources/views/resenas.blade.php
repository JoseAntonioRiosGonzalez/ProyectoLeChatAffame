@extends('layout')

@section('title', 'Le Chat Affamé - Reseñas')

@section('menu-activo-resenas', 'active')

@section('content')
<div class="container">
        <h1>Reseñas</h1>

        <form action="{{ url('/resenas') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection


