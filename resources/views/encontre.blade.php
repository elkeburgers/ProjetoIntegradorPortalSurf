@extends('layouts.templateSurf')

@section('titulo')
Encontre
@endsection

@section('conteudo')

<!-- banner -->
<section class="d-flex">
    <div class="encontreBanner">
        <div class="frontBanner">
            <h1 class="mx-auto caronaTextoBanner">Encontre</h1>
        </div>
    </div>
</section>

<section class="container">
    <!-- titulo da pagina -->
    <div class="container">
        <h1 id="encontreTopo" class="mt-5 text-center">Encontre lojas com produtos e serviços de <br> surf aonde
            você estiver:</h1>
    </div>

    <!-- campos de busca -->
    <section class="mt-5">
        <div class="row align-items-center">

            <h2 class="font-weight-bold encontreSelecao">O que você procura?</h2><br>
            <!-- <form action="" class="form-inline"> -->

            <div class="col-lg-3 col-md-3 ml-5 mr-5">
                <select class="form-control" id="encontreLocal">
                    <option disabled selected>Selecione uma praia!</option>
                    <option value='{"lat":-23.7905456, "lng":-45.5657482}'>Maresias</option>
                    <option value='{"lat":-23.7737363, "lng":-45.6771234}'>Baleia</option>
                    <option value='{"lat":-23.766204, "lng":-45.736504}'>Juquey</option>
                    <option value='{"lat":-23.7776892, "lng":-45.6550209}'>Camburi</option>
                    <option value='{"lat":-24.0142973, "lng":-46.2771556}'>Praia do Tombo</option>
                </select>
            </div>

            <div class="mr-5">
                <input type="hidden" name="encontreServico" id="encontreServico">
                <img src="{{asset('icn/prancha-de-surfe.svg')}}" alt="equipamentos" class="encontreIcones"
                    id="encontrePrancha">
                <img src="{{asset('icn/neoprene.svg')}}" alt="surfwear" class="encontreIcones" id="encontreSurfwear">
                <img src="{{asset('icn/surfar.svg')}}" alt="aulas" class="encontreIcones" id="encontreAulas">
            </div>

            <!-- botao de enviar -->
            <button type="submit" class="btn encontreBotao" id="botao">Dropar</button>

            <!-- </form> -->
        </div>
    </section>

    <!-- mapa do google -->
    <div id="map" class="encontreMapa mt-5"></div>

</section>

<!-- botao topo -->
<div class="container text-center mt-5 mb-5">
    <a href="#encontreTopo" class="btn encontreBotao">Topo</a>
</div>

<!-- script para api -->
<script src="{{asset('js/encontre.js')}}"></script>
<!-- <script src="{{asset('js/encontreTeste.js')}}"></script> -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQwuBUVSLoBivCe5CLvcZK7u3izeTmVRs&callback=iniciarMap"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQwuBUVSLoBivCe5CLvcZK7u3izeTmVRs"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-23.791516,-45.5627291radius=10000&type=store&keyword=surf&key=AIzaSyAQwuBUVSLoBivCe5CLvcZK7u3izeTmVRs"></script> -->

@endsection
