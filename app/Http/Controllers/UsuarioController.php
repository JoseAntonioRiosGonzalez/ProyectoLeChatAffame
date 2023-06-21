<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function inicio(Request $req){

        $email = $req->email;
        $password = $req->password;

        $usuariosBD = User::where('email', $email)->first();

        if ($usuariosBD && password_verify($password, $usuariosBD->password)) {
            Session::put('usuario', $usuariosBD);
            return view("menu", ["usuario" =>$usuariosBD]);
        } else {
            return view("welcome");
        }
    }

    public function logout(){
        Auth::logout();
    
        
        return redirect('/');
    }

    public function registrar(Request $req){    
        
        $users = new User;

        $users->nombre = $req->nombre;
        $users->email   = $req->email;
        $users->telefono = $req->telefono;
        $users->password = Hash::make($req->password);

        $users->save();

        return view("welcome");
        
    }

    public function menu(){
        return view("menu");
    }

    public function calidad(){
        return view("calidad");
    }

    public function plantilla(){
        return view("plantilla");
    }
}
