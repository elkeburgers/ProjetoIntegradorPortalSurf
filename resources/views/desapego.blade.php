@extends('layouts.templateSurf')

@section('titulo')
    Desapego
@endsection

@section('conteudo')


        <!-- busca -->
        <!-- <div>
            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center align-items-center col-lg-6">
                <input class="form-control mr-sm-4 col-lg-8" type="search" placeholder="Encontre no Portal do Surf!"
                    aria-label="Search">
                <button class="btn encontreBotao my-2 my-sm-0 col-lg-2" type="submit">Busca</button>
            </form>
        </div><br><br> -->

        <!-- segmentos -->
    <section class="d-flex">
        <div class="despegoBanner ">
            <div class = "frontBanner">
                <h1 class="caronaTextoBanner">Desapego</h1>
            </div>
        </div>
    </section>

    <section  class="h-auto"  >
    <div class="shadow-lg container" id="desapego">
        
       
            <div class="row" id="desapegar">
               
                <div  id="desapegar3">
                    
                    <h4>Aqui você encontra o equipamento que procura por um precinho mais camarada :)</h4><br>
                     
                </div>


               
            </div>

            <div class="titulodeSecaoDesapego"> 
                <h3>Produtos em destaque!</h3>
            </div>
            <div class="card cardHomeDesapego h-auto p-3"> 
                @foreach($ofertas as $oferta)
                    <div class="card col-4 cardOfertaDesapego ">

                        <img src="{{asset('storage/'.$oferta->image)}}" style="height:55vh; margin-bottom: 10px;margin-top: 10px;" alt="">
        
                        
                        <h6 class="card-title">{{$oferta -> descriptionProduct}}</h6>
                         <h5 class="card-text font-weight-bold">R$ {{$oferta -> priceProduct}} </h5><br>
                         <a href="{{route('ofertaDesapego.show', $oferta->id)}}"> <input type="button" class="btn encontreBotao "value="Detalhes">
                        </a>
                    </div>
                @endforeach
            </div>
   

        <form class="d-flex flex-row" style="margin-top: 100px;margin-bottom: 76px;" action="{{route('ofertaDesapego.create')}}" method="get">
                <div id="desapegar4">
                    <h3 class="font-weight-bold">Também quer fazer uma grana!? </h3> 
                    <button class="btn encontreBotao mb-5" ype="submit" style="height: 9vh;width: 14vw;font-size: 1.5rem;">Desapegue</button>
                </div>
        </form>
                
    </section>


@endsection