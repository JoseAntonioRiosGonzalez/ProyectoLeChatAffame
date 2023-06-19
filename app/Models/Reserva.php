<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reserva'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idRsv'; // Atributo de identificación
    protected $fillable = ['idRsv', 'idUsu', 'fechaReserva', 'numeroMesa']; // Atributos asignables en masa
}
