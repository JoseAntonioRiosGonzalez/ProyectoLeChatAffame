<?php

namespace App\Http\Controllers;

use App\Models\Reseña;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReseñaController extends Controller
{
    public function reseñas(){

        $reseñas = DB::table('reseña AS r')
        ->leftJoin('users AS u', 'r.idUsu', '=', 'u.idUsu')
        ->select('r.*', 'u.*')
        ->get();

        return view("reseñas", ["reseñas" => $reseñas]);
    }

    public function guardarReseña(Request $request)
    {
    
        $resena = new Reseña();
        $resena->idUsu = $request->idUsu;
        $resena->puntuacion = $request->puntuacion;
        $resena->comentario = $request->comentario;
        $resena->fechaReseña = date("Y-m-d");
    
        $resena->save();
    
        return redirect()->route('reseñas');
    }
    
}
