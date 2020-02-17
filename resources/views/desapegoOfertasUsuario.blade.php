@extends('layouts.templateSurf')

@section('titulo')
    Desapego - Seu histórico de ofertas 
@endsection

@section('conteudo')

<section class="container d-flex align-items-center flex-column h-auto" >

         
    <div class="img-ofertaDesapegoHistorico h-auto">
    
            @foreach($ofertas as $oferta)

            @if(Auth::user()->id == $oferta->user_id) 
                    <div class="card col-4 cardOfertaDesapego">
                    
                        <img src="{{asset('storage/'.$oferta->image)}}" style="height:55vh; margin-bottom: 10px;margin-top: 10px;" alt="">
                    
                        
                        <h5 class="card-title">{{$oferta -> descriptionProduct}}</h5>
                        <strong><h5 class="card-text">R$ {{$oferta -> priceProduct}} </h5></strong><br>
                    
                        <div class="d-flex flex-row">
                            <a href="{{route('ofertaDesapego.edit', $oferta -> id)}}" class="btn encontreBotao mr-1">Editar</a>
                            <form action="{{route('ofertaDesapego.destroy', $oferta -> id)}}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>    
                        </div>
                        @else
           
           <div style="height: 49vh;">
               <div class="jumbotron jumbotron-fluid" >
                   <div class="container">
                       <h3 class="display-5" style="color: #245b7e;">Você não tem ofertas cadastradas!</h3>
                       
                   </div>
               </div>
           </div>
    @endif 
                                 
            @endforeach
              
 
    
          
               
          
        
    <!-- botao voltar e topo -->

    </div>
    <div class="container mt-3 p-3">
<a href='#historicoOfertasTopo' class="btn encontreBotao">Topo</a>
<a href="/desapego" class="btn encontreBotao">Voltar</a>
</div>
   

</section>




@endsection