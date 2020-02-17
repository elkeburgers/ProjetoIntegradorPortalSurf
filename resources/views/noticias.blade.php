@extends('layouts.templateSurf')

@section('titulo')
    Noticias
@endsection

@section('conteudo')

section class= "d-flex">
    <div class="noticiasBanner">
        <div class = "frontBanner">
            <h1 class="mx-auto caronaTextoBanner">Noticias</h1>
        </div>
    </div>
</section>

<!-- Titulo da pagina -->
<section class="container mt-5 mb-5">
    <h1 class="mb-5 text-center" id="noticiasTopo">Saiba tudo sobre o mundo do surf!</h1>

    <!-- Cards de postagens -->
    <div class="cardBlogGeral">
        <div class="card-body shadow-lg cardBlog row no-gutters">
            <div class="col-4 blogMobile">
                <img style="max-width: 90%" class="card-img-left" src="./imagens/img-noticias/medina.jpg"
                    alt="Medina">
            </div>
            <div class="col-8">
                <h4 class="card-title">Medina cortou a unha</h4>
                <p class="card-text">Estava insuportável surfar com elas daquele tamanho. Até a minha namorada
                    reclamou.
                    E se você Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, quasi sapiente quod
                    repellendus deserunt magnam laborum magni ...</p>
                <a href="#" class="card-link textoCardBlog">Saiba mais</a>
            </div>
        </div>
    </div>
    <br>
    <div class="cardBlogGeral">
        <div class="card-body shadow-lg cardBlog row no-gutters">
            <div class="col-4 blogMobile">
                <img style="max-width: 90%" class="card-img-left" src="./imagens/img-noticias/mineirinho.jpeg"
                    alt="Mineirinho">
            </div>
            <div class="col-8">
                <h4 class="card-title">Mineirinho ficou com inveja</h4>
                <p class="card-text">Eu queria ter tanta repercursão na mídia quanto o Medina. Até quando ele corta
                    a
                    unha vira notícia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam officiis vero
                    nihil exercitationem animi id nobis, sunt, rep...</p>
                <a href="#" class="card-link textoCardBlog">Saiba mais</a>
            </div>
        </div>
    </div>
    <br>
    <div class="cardBlogGeral">
        <div class="card-body shadow-lg cardBlog row no-gutters">
            <div class="col-4 blogMobile">
                <img style="max-width: 90%" class="card-img-left" src="./imagens/img-noticias/amazonas_peniche.jpg"
                    alt="Peniche Portugal">
            </div>
            <div class="col-8">
                <h4 class="card-title">Festival de super tubos em Peniche/Portugal com galera do Amazonas</h4>
                <p class="card-text">Galera amazonense surfista de pororocado Amazonas se encontra em Peniche,
                    Portugal,
                    para curtir e participar o campeonato de super tubos. A praia é conhecida no mundo por ser um
                    dos
                    principais picos deste tipo de onda...</p>
                <a href="#" class="card-link textoCardBlog">Saiba mais</a>
            </div>
        </div>
    </div>
</section>

<!-- pagination -->
<div class="d-flex justify-content-center mb-3">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
        </ul>
    </nav>
</div>

<!-- botao topo -->
<div class="container text-center mb-5">
    <a href="#noticiasTopo" class="btn encontreBotao">Topo</a>
</div>

@endsection
