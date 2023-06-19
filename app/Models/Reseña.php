<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    use HasFactory;

    protected $table = 'reseña'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idRsn'; // Atributo de identificación
    protected $fillable = ['idRsn', 'idUsu', 'comentario', 'puntuacion', 'fechaReseña']; // Atributos asignables en masa
}
