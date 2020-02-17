@extends('layouts.templateSurf')

@section('titulo')
Desapego Oferta
@endsection

@section('conteudo')
    <section class="d-flex">
        <div class="despegoBannerIndividual">
            <div class = "frontBanner">
                <h1 class="caronaTextoBanner">Estão Desapegando</h1>
            </div>
        </div>
    </section>
    <section class="d-flex p-3 justify-content-center ofertaIndivid">
       
            <div class="d-flex p-3" style="margin-top: 18px;">
                @foreach($ofertas as $oferta)
                
                    <div class="row col-xl-6 col-lg-12 col-sm-12 w-50 h-50  mr-5" >
                        <img src="{{asset('storage/'.$oferta->image)}}" class="img-fluid img-oferta-individual">
                    </div>
                   
                 
            
                    <!-- informacoes oferta -->
                    <div class="row col-xl-6 col-lg-12 col-sm-12 d-flex flex-column" style="
    color: #255f85;">
                        <h1 class="font-weight-bold"> {{$oferta->descriptionProduct}}</h1><br>
                        <h5 class="card-text font-weight-bold">Preço: R$ {{$oferta->priceProduct}} </h5><br> 
                        <h5>Data oferta:<br>{{$oferta->created_at}} </h5><br>
                        <h5 class="card-text">Estado: {{$oferta->withdrawalState}}</h5>
                        <h5 class="card-text">Cidade: {{$oferta->withdrawalCity}}</h5>
                        <h5 class="card-text">Bairro: {{$oferta->withdrawalNeighborhood}}</h5><br>
                     
                        <strong><h5 class="card-text font-weight-bold">{{$oferta->user_name}}</h5></strong>
                        
                        <strong><h5 class="card-text  font-weight-bold">Fone: {{$oferta->phone}}</h5></strong>


                    </div>
                @endforeach        
            </div>
        
    </section>

        <!-- botão voltar -->
        <div class="container text-center mt-5 mb-5">
            <!-- botao voltar -->
            <a href='/desapego'><button class='btn encontreBotao'>Voltar</button></a>
        </div>


@endsection