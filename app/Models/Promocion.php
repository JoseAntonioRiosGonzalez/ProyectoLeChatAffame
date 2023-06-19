<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $table = 'promocion'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idPro'; // Atributo de identificación
    protected $fillable = ['idPro', 'promocion']; // Atributos asignables en masa
}
