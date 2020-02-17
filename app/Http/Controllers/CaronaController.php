<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaronaController extends Controller
{
    public function viewCarona(Request $request){
        return view('carona');
    }
    public function viewPerfilCarona(Request $request){
        return view('caronasPerfil');
    }
    public function viewCaronasAvaliar(Request $request){
        return view('caronasAvaliar');
    }
}
