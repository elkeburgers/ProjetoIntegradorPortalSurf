<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
  public function viewUsuarioDados(Request $request){
      return view('usuarioDados');
  }
}