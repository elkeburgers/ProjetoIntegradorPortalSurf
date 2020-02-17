<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncontreController extends Controller
{
    public function viewEncontre(Request $request){
        return view('encontre');
    }
}
