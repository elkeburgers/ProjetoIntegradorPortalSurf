@extends('layouts.templateSurf')

@section('titulo')
Riviera
@endsection

@section('conteudo')

<!-- navegacao entre praias -->
<section class="d-flex h-75" id="rivieraTopo">
    <div style="margin-top: 150px">
        <h1 class="col-xl-7 col-lg-6 col-md-12 col-sm-12">RIVIERA</h1>
        <!-- <nav class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="nav justify-content-between">
                <li class="nav-link"><a href="previsao.php">VOLTAR</a></li>
                <li class="nav-link"><a href="zbarradouna.php">PROXIMA PRAIA</a></li>
            </ul>
        </nav> -->
    </div>
</section>

<!-- informacoes gerais fixas sobre a praia -->
<section class="container mt-5 mb-2">
    <div class="row mt-5">
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
            <img src="../imagens/img-previsao/riviera.png" class="img-fluid mb-3" stylealt="responsive image">
        </div>
        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
            <p>As melhores valas encontram-se nos dois extremos, sobretudo no canto direito.</p>
            <ul>
                <li>Tamanho - 2 a 6 pés</li>
                <li>Ondulação ideal - Sudeste | Leste | Sul</li>
                <li>Vento ideal - Quadrante Norte</li>
                <li>Grau de dificuldade - Baixa</li>
                <li>Melhor época - Outono | Primavera</li>
                <li>Constância - Alta</li>
                <li>Crowd - Intenso</li>
            </ul>
        </div>
    </div>
</section>

<!-- condicoes do dia -->
<section class="bg-light pt-2 pb-3">
    <div class="container mt-3 mb-2">
        <h4>Condições atuais:</h4>
        <img src="../imagens/img-previsao/prevdia.png" class="img-fluid" alt="condicoes atuais">
    </div>
</section>

<!-- previsao do proximos sete dias -->
<div class="container mt-4 mb-2">
    <h4>Previsão dos próximos 7 dias:</h4>
    <img src="../imagens/img-previsao/previsurf.png" class="img-fluid" alt="condicoes atuais">
</div>

<!-- mapa oceanografico -->
<section class="bg-light pt-2 pb-3">
    <div class="container justify-content-center mt-2 mb-2">
        <h4>Pra quem manja:</h4>
        <img src="../imagens/img-previsao/manja.png" class="img-fluid" alt="condicoes atuais">
    </div>
</section>

<!-- botao topo -->
<div class="container text-center mt-2 mb-5">
    <a href="#rivieraTopo" class="btn btnSurf">Topo</a>
</div>

<script src="../js/previsaoTeste.js"></script>

@endsection
