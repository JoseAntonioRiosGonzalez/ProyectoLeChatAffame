<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idUsu'; // Atributo de identificación
    protected $fillable = ['idUsu', 'nombre', 'email', 'password', 'telefono']; // Atributos asignables en masa
    protected $hidden = ['password'];
}
