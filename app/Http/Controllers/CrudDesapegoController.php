<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desapego;
use File;
use Illuminate\Http\UploadedFile; 
use Auth; 
use App\User;

class CrudDesapegoController extends Controller
{
    /**
     * Display a listing of the resource.
  
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $ofertas = Desapego::all();
               
        return view('desapegoOfertasUsuario')->with(['ofertas'=>$ofertas]);

        
        
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        if (Auth::user()){
        return view('desapegoCadastroOferta');
        }else{
            return redirect()->route('login');
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()){
            $ofertas = new Desapego();
           
            $ofertas->descriptionProduct = $request->input('descriptionProduct');
            $ofertas->priceProduct = $request->input('priceProduct');
            $ofertas->withdrawalState = $request->input('withdrawalState');
            
            $ofertas->withdrawalCity = $request->input('withdrawalCity');
            $ofertas->withdrawalNeighborhood = $request->input('withdrawalNeighborhood');
            $ofertas->image = $request->input('image');
            $ofertas->phone = $request->input('phone');
            $ofertas['user_id'] = Auth::user()->id;
            $ofertas['user_name'] = Auth::user()->name;
            
           

           if($request->hasFile('image')){
               $ofertas->image = $request->image->store('imagens');
           }
          
            $ofertas->save();
           
            
        
        return redirect()->route('ofertaDesapego.index');
        }else{
            return redirect()->route('login');
        }
    }


    public function homeDesapego(){

        $ofertas = Desapego::all();
        return view('/desapego')->with(['ofertas'=>$ofertas]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $ofertas = Desapego::where('id', $id)->get();
        

            return view('desapegoOfertaIndividual')->with(["ofertas"=>$ofertas]);
        
    


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id=0){
        $ofertas = Desapego::find($id);
        
        if($ofertas){
            return view('desapegoEditarOferta')->with(["ofertas"=>$ofertas]);
        }

        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $ofertas = Desapego::find($id);
           
        $ofertas->descriptionProduct = $request->input('descriptionProduct');
        $ofertas->priceProduct = $request->input('priceProduct');
        $ofertas->withdrawalState = $request->input('withdrawalState');
        $ofertas->withdrawalState = $request->input('withdrawalState');
        $ofertas->withdrawalCity = $request->input('withdrawalCity');
        $ofertas->withdrawalNeighborhood = $request->input('withdrawalNeighborhood');
        $ofertas->image = $request->input('image');
        $ofertas->phone = $request->input('phone');

       if($request->hasFile('image')){
           $ofertas->image = $request->image->store('imagens');
       }
      
        $ofertas->save();
        
       return redirect()->route('ofertaDesapego.index')->with('success', "Atualizado com Sucesso" );
         

    }
    /**
     * Remove the specified resource from storage.
   
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Desapego::where('id',$id)->delete();
       
        return redirect()->route('ofertaDesapego.index')->with('delete', 'Oferta deletada');
     
    
     
    }
}

 
