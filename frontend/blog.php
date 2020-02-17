<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Blog</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>

    <!-- Banner -->
    <div class="blogBanner">
        <div class = "frontBanner-azul">    
            <h1 class="caronaTextoBanner">Blog</h1>
        </div>
    </div>

    <!-- Titulo da pagina -->
    <section class="container mt-5 mb-5">
        <h1 class="mb-5 text-center" id="blogTopo">Novidades para veteranos e principiantes!</h1>

        <!-- Cards de postagens -->
        <div class="cardBlogGeral">
            <div class="card-body shadow-lg cardBlog row no-gutters">
                <div class="col-4 blogMobile">
                    <img style="max-width: 90%" class="card-img-left blogMobile"
                        src="./imagens/img-blog/pranchaPraia.jpg" alt="Pranchas para manobras">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h4 class="card-title">Qual a melhor prancha para manobras?</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi! Placeat
                            veniam
                            in fugiat voluptatibus nam dolorem reprehenderit, maxime deleniti quibusdam ...</p>
                        <a href="#" class="card-link textoCardBlog">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="cardBlogGeral">
            <div class="card-body shadow-lg cardBlog row no-gutters">
                <div class="col-4 blogMobile">
                    <img style="max-width: 90%" class="card-img-left" src="./imagens/img-blog/protecaoSurf.jpg"
                        alt="Equipamentos de segurança">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h4 class="card-title">Você sabe a importância dos equipamentos de segurança no surf?</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta
                            assumenda,
                            molestiae dolorum cupiditate facere, illo laborum iste laudantium voluptates, sapiente
                            necessitatibus....</p>
                        <a href="#" class="card-link textoCardBlog">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="cardBlogGeral">
            <div class="card-body shadow-lg cardBlog row no-gutters">
                <div class="col-4 blogMobile">
                    <img style="max-width: 90%" class="card-img-left" src="./imagens/img-encontre/surfboard.jpg"
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
                        <a href="#" class="card-link textoCardBlog">Saiba mais</a>
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


    <?php include_once("padrao/footer.php") ?>
</body>

</html>