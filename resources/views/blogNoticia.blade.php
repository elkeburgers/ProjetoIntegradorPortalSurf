@extends('layouts.templateSurf')

@section('titulo')
Blog
@endsection

@section('conteudo')

<div class="d-flex">
    <div class="blogBanner">
        <div class="frontBanner">
            <h1 class="mx-auto textoBanner">Blog</h1>
        </div>
    </div>
</div>

<!-- Foto e Titulo da noticia -->
<div class="container mt-5 mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
            <img class="imgCardBlog2" src="../imagens/img-blog/pranchaPraia.jpg" alt="Pranchas para manobras"/>
        </div>
        <div class="col-lg-6 col-md-6">
            <h2>Qual a melhor prancha para manobras?</h1>
        </div>
    </div>
</div>

<!-- artigo -->
<div class="container text-justify mb-5">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque est magnam laborum fuga mollitia cum, tempore quasi quas possimus inventore quisquam aliquam eius natus reiciendis consequuntur placeat dolores fugiat.</p>
</div>

<!-- botao retornar e  topo -->
<div class="container text-center mb-5">
    <a href="/blog" class="btn btnSurf">Voltar</a>
    <a href="#blogTopo" class="btn btnSurf">Topo</a>
</div>

@endsection
