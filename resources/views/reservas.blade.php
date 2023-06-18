@extends('layout')

@section('title', 'Le Chat Affamé - Reservas')

@section('menu-activo-reservas', 'active')

@section('content')
    <div class="container">
        <h1>Reservas</h1>

        <form action="{{ url('/reservas') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="dia">Día:</label>
                <select id="dia" name="dia" class="form-control">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <select id="hora" name="hora" class="form-control">
                    @for ($i = 17; $i <= 22; $i++)
                        <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00</option>
                    @endfor
                </select>
            </div>

            <div class="form-group">
            <label for="personas" style="color: white;">Introduce el número de comensales:</label>
            <input type="number" id="personas" name="personas" class="form-control" min="1">
            </div>

            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
@endsection

