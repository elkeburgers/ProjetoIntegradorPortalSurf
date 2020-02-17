@extends('layouts.templateSurf')

@section('titulo')
    Blog
@endsection

@section('conteudo')

<section class= "d-flex">
    <div class="blogBanner">
        <div class = "frontBanner">
            <h1 class="mx-auto caronaTextoBanner">Blog</h1>
        </div>
    </div>
</section>

<!-- Titulo da pagina -->
<section class="container mt-5 mb-5">
    <h1 class="mb-5 text-center" id="blogTopo">Novidades para veteranos e principiantes!</h1>

    <!-- Cards de postagens -->
    <div class="cardBlogGeral">
        <div class="card-body shadow-lg cardBlog row no-gutters">
            <div class="col-4 blogMobile">
                <img class="card-img-left imgCardBlog" src="./imagens/img-blog/pranchaPraia.jpg" alt="Pranchas para manobras">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h4 class="card-title">Qual a melhor prancha para manobras?</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi! Placeat
                        veniam
                        in fugiat voluptatibus nam dolorem reprehenderit, maxime deleniti quibusdam ...</p>
                    <a href="/blog/noticia" class="card-link textoCardBlog">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="cardBlogGeral">
        <div class="card-body shadow-lg cardBlog row no-gutters">
            <div class="col-4 blogMobile">
                <img class="card-img-left imgCardBlog" src="./imagens/img-blog/protecaoSurf.jpg"
                    alt="Equipamentos de segurança">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h4 class="card-title">Você sabe a importância dos equipamentos de segurança no surf?</h4>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta
                        assumenda,
                        molestiae dolorum cupiditate facere, illo laborum iste laudantium voluptates, sapiente
                        necessitatibus....</p>
                    <a href="/blog/noticia" class="card-link textoCardBlog">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="cardBlogGeral">
        <div class="card-body shadow-lg cardBlog row no-gutters">
            <div class="col-4 blogMobile">
                <img class="card-img-left imgCardBlog"" src="./imagens/img-encontre/surfboard.jpg"
                    alt="Shaper de Itanhaem">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h4 class="card-title">Fomos conhecer o shaper de Itanhaém que dá vida nova a pranchas
                        abandonadas.</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                        maiores quasi
                        suscipit, ducimus eligendi, voluptate veritatis, ad tempora placeat delectus earum
                        totam ab...</p>
                    <a href="/blog/noticia" class="card-link textoCardBlog">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- pagination -->
<div class="d-flex justify-content-center mt-5 mb-3">
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
    <a href="#blogTopo" class="btn encontreBotao">Topo</a>
</div>
@endsection
