<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use App\Models\Promocion;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function reservas()
    {
        $reservas = Reserva::all();
        return view("reservas", ["reservas" => $reservas]);
    }

    public function comprobarMesas(Request $request)
    {
        $fecha = $request->fecha;

        $mesasReservadas = Reserva::where('fechaReserva', $fecha)->pluck('numeroMesa')->toArray();

        $partes = explode("-", $fecha);

        list($año, $mes, $dia) = $partes;

        $fecha = $dia."-".$mes."-".$año;

        return view("reservas", ["mesasReservadas" => $mesasReservadas, "fechaSeleccionada" => $fecha, "alergias" => Alergia::all()]);
    }

    public function insertarReserva(Request $request)
    {
        $mesasSeleccionadas = $request->input('mesas');
        $fecha = $request->input('fecha');
        $idUsu = $request->idUsu;
        $alergiasSeleccionadas = $request->input('alergias');


        $partes = explode("-", $fecha);

        list($dia, $mes, $año) = $partes;

        $fecha = $año."-".$mes."-".$dia;
        
        foreach($mesasSeleccionadas as $reservaMesa){

            $reserva = new Reserva;

            $reserva->idUsu = $idUsu;
            $reserva->fechaReserva = $fecha;
            $reserva->numeroMesa = $reservaMesa;

            $reserva->save();

            $alergia = new Alergia;

            if(in_array("crustaceos", $alergiasSeleccionadas)){
                $alergia->crustaceos = 1;
            }else{
                $alergia->crustaceos = 0;
            }

            if(in_array("gluten", $alergiasSeleccionadas)){
                $alergia->gluten = 1;
            }else{
                $alergia->gluten = 0;
            }

            if(in_array("huevo", $alergiasSeleccionadas)){
                $alergia->huevo = 1;
            }else{
                $alergia->huevo = 0;
            }

            if(in_array("lactosa", $alergiasSeleccionadas)){
                $alergia->lactosa = 1;
            }else{
                $alergia->lactosa = 0;
            }

            if(in_array("vegano", $alergiasSeleccionadas)){
                $alergia->vegano = 1;
            }else{
                $alergia->vegano = 0;
            }

            $alergia->idRsv = Reserva::count();

            $alergia->save();
        }

        return redirect()->route('reservas')->with('mensaje', 'Reservas realizadas correctamente.');
    }

    public function promocion(Request $req){

        $promocionIntroducida = $req->promocion;

        $promocionValida = Promocion::where("promocion", $promocionIntroducida)->count();

        if($promocionValida == 1){
            return redirect()->route('reservas')->with('promocionBien', '¡Enhorabuena! Este código tiene un 10% de descuento en la consumición total. Enséñelo a la hora de pagar');
        }else{
            return redirect()->route('reservas')->with('promocionMal', 'Código promocional erróneo o previamente utilizado.');
        }
    }

    public function insertarPromocion(){

        $codigosPromo = Promocion::all();

        return view("insertarPromo",["codigosPromo" => $codigosPromo]);    
    }

    public function insertarPromo(Request $req){

        $promocion = $req->promocion;

        $nuevaPromo = new Promocion;

        $nuevaPromo->promocion = $promocion;

        $nuevaPromo->save();

        return redirect()->route("reservas");
    }   

    public function borrarPromo($idPro){

        Promocion::destroy($idPro);

        return redirect()->route("insertarPromocion");
    }   
    
}
