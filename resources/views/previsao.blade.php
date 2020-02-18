@extends('layouts.templateSurf')

@section('titulo')
Previsão
@endsection

@section('conteudo')

<section class="d-flex">
    <div id="previsaoBanner">
        <div class="frontBanner">
            <h1 class="mx-auto textoBanner">Previsão</h1>
        </div>
    </div>
</section>

<!-- titulo -->
<div class="container">
    
    <div class="row justify-content-center mt-4 mb-4">
        <h4>Selecione o pico abaixo e vamos fazer o check!</h4>
        
        <div class=container>
            <div class="card-deck">
                
                <div class="card">
                    <a href="/previsao/praia">
                        <img src="imagens/img-previsao/riviera.png" class="card-img-top" alt="onda de riviera"></a>
                    <div class="card-body">
                        <h5 class="card-title">Riviera</h5>
                        <p class="card-text">As melhores valas encontram-se nos dois extremos, sobretudo no canto
                            direito.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                
                <div class="card">
                    <a href="/previsao/praia">
                        <img src="imagens/img-previsao/surfmaresias.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Maresias</h5>
                        <p class="card-text">A onda de Maresias detém o título de uma das melhores ondas de São Paulo.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                
                <div class="card">
                    <a href="/previsao/praia">
                        <img src="imagens/img-previsao/pauba.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">Paúba</h5>
                        <p class="card-text">O pico é perfeito para a prática do bodyboard e skimboard, mas a galera do
                            surf também marca presença em busca dos canudos.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                
                <div class="container mt-5">
                    <div class="card-deck">
            
                        <div class="card">
                            <a href="/previsao/praia">
                                <img src="imagens/img-previsao/baleia.jpeg" class="card-img-top"
                                    alt="onda de riviera"></a>
                            <div class="card-body">
                                <h5 class="card-title">Baleia</h5>
                                <p class="card-text">As melhores valas encontram-se nos dois extremos, sobretudo no
                                    canto direito.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        
                        <div class="card">
                            <a href="/previsao/praia">
                                <img src="imagens/img-previsao/barradouna.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Barra do Una</h5>
                                <p class="card-text">A onda de Maresias detém o título de uma das melhores ondas de São
                                    Paulo.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        
                        <div class="card">
                            <a href="/previsao/praia">
                                <img src="imagens/img-previsao/guaeca.jpeg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">Guaecá</h5>
                                <p class="card-text">O pico é perfeito para a prática do bodyboard e skimboard, mas a
                                    galera do surf também marca presença em busca dos canudos.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        
                        <div class="container mt-5">
                            <div class="card-deck">
                        
                                <div class="card">
                                    <a href="/previsao/praia">
                                        <img src="imagens/img-previsao/juquehy.jpg" class="card-img-top"
                                            alt="onda de riviera"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Juquehy</h5>
                                        <p class="card-text">As melhores valas encontram-se nos dois extremos, sobretudo
                                            no canto direito.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <a href="/previsao/praia">
                                        <img src="imagens/img-previsao/surfmaresias.png" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h5 class="card-title">Santiago</h5>
                                            <p class="card-text">A onda de Maresias detém o título de uma das melhores ondas de São Paulo.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                </div>

                                <div class="card">
                                    <a href="/previsao/praia">
                                        <img src="imagens/img-previsao/pauba.jpg" class="card-img-top" alt="...">
                                        <div class="card-body"></a>
                                            <h5 class="card-title">Cambury</h5>
                                            <p class="card-text">O pico é perfeito para a prática do bodyboard e
                                                skimboard,
                                                mas a galera do surf também marca presença em busca dos canudos.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
