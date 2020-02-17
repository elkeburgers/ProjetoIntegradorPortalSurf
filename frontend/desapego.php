<!-- Rodrigo: página principal de acesso ao desapego, onde ficam as ofertas. Lembrando que tem que ter o link para um usuário logado cadastrar uma nova oferta e acessar histórico de ofertas  cadastradas anteriormente (páginas do Caio). Imaginei um aside com publi, veja se concorda/ fica bom, por favor. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Desapego</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>

   
    <main class="container">

        <!-- busca -->
        <div>
            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center align-items-center col-lg-6">
                <input class="form-control mr-sm-4 col-lg-8" type="search" placeholder="Encontre no Portal do Surf!"
                    aria-label="Search">
                <button class="btn encontreBotao my-2 my-sm-0 col-lg-2" type="submit">Busca</button>
            </form>
        </div><br><br>

        <!-- segmentos -->
        <section id="desapego">
            <div class="despegoBanner ">
                <div class = "frontBanner-vermelho">
                    <h1 class="textoBanner">Desapego</h1>
                </div>
            </div>
            <div class="card-group cards-desapego ">

                <div class="card border-light col-lg-6 col-md-12 col-sm-12 ">
                    <img src="imagens/img-desapego/PranchasnovaPagina.jpg"
                        class="card-img-top shadow-lg imagem-desapego" alt="imagem de prancha">
                    <a href="./desapegoOferta.php" style="text-decoration: none;">
                        <div class="card-body texto-card-desapego">
                            <h2 class="card-title">PRANCHAS</h2>
                            <h3 id="card-subtitle text-muted ">Drop Now</h3>
                        </div>
                    </a>
                </div>

                <div class="card border-light col-lg-6 col-md-12 col-sm-12">
                    <img src="imagens/img-desapego/roupas7.png" class="card-img-top shadow-lg imagem-desapego"
                        alt="imagem de prancha">
                    <div class="card-body texto-card-desapego">
                        <h2 class="card-title ">VESTUÁRIO</h2>
                        <h3 id="card-subtitle text-muted ">Drop Now</h3>
                    </div>
                </div>

                <div class="card border-light col-lg-12 col-md-12 col-sm-12">
                    <img src="imagens/img-desapego/acessorios5.jpg" class="card-img-top shadow-lg imagem-desapego"
                        alt="imagem de prancha">
                    <div class="card-body texto-card-desapego">
                        <h2 class="card-title">ACESSÓRIOS</h2>
                        <h3 id="card-subtitle text-muted ">Drop Now</h3>
                    </div>
                </div>

            </div>
        </section>

        <!-- link para cadastro de oferta -->
        <section id="desapegar">

            <div class="card border-light row col-xl-10 justify-content-center">
                <div class="row no-gutters ">
                    <div class="col-xl-5 col-lg-6 col-md-8 ml-3 mr-3">
                        <img src="imagens/img-desapego/desapegar.jpg" class="card-img shadow-lg "
                            alt="imagem de uma mulher segurando cartaz de vende">
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">QUER DESAPEGAR TAMBÉM? =)</h2>
                            <p class="card-text">É fácil! se você ja for cadastrado no nosso site, clique aqui e ja saia
                                desapegando</p>
                            <a href="./desapegoCadastroOferta.php"><button type="button"
                                    class="btn encontreBotao">Desapegar</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <?php include_once("padrao/footer.php") ?>
</body>

</html>