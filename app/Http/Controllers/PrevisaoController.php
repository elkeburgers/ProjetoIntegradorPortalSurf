<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrevisaoController extends Controller
{
  public function viewPrevisao(Request $request){
      return view('previsao');
  }
  public function viewPrevisaoRiviera(Request $request){
      return view('previsaoRiviera');   
  }
}
