<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;

    protected $table = 'alergia'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idAle'; // Atributo de identificación
    protected $fillable = ['idAle', 'idRsv', 'crustaceos', 'gluten', 'huevo', 'lactosa', 'vegano']; // Atributos asignables en masa
}
