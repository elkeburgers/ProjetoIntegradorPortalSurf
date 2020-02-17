<!-- Rodrigo: página de um oferta do desapego, acessada por link na oferta da página principal do Desapego. -->

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
    <main class="mt-5 mb-5">
        <section class="container d-flex flex-wrap justify-content-between p-3 desapego-oferta" id="desapegoOfertaTopo">


            <div class="card  img-ofertaDesapego border border-light" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="./desapegoOfertaIndividual.php" class="retiraLink-desapegoIndiv"> <img
                                src="imagens/img-desapego/prancha_6.jpg" class="card-img" alt="imagem prancha"></a>
                    </div>
                    <div class="col-md-8">

                        <div class="card-body">
                            <h5 class="card-title">Power Light - Ótima marca</h5>
                            <p class="card-text">R$ 800,00 <br>Entrego dependendo do local</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card  img-ofertaDesapego border border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imagens/img-desapego/prancha_3.jpg" class="card-img-top" alt="imagem prancha">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Prancha pouco uso</h5>
                            <p class="card-text">R$ 450,00<br>Pela marca está na metade do preço<br>Estou de mudança,
                                preciso vender o mais rápido</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  img-ofertaDesapego border border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imagens/img-desapego/prancha_4.jpeg" class="card-img-top" alt="imagem prancha">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Prancha semi-nova</h5>
                            <p class="card-text">R$ 350,00<br>Quase uma caridade!<br> retirar no local</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  img-ofertaDesapego border border-light">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imagens/img-desapego/prancha_2.jpg" class="card-img-top" alt="imagem prancha">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Prancha nova</h5>
                            <p class="card-text">R$ 400,00<br>À retirar</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- botões -->
        <div class="container text-center mt-5 mb-5">
            <!-- botao voltar -->
            <a href='desapego.php'><button class='btn encontreBotao'>Voltar</button></a>
            <!-- botao topo -->
            <a href="#desapegoOfertaTopo" class="btn encontreBotao">Topo</a>
        </div>

    </main>

    <!-- pagination -->
    <div class="d-flex justify-content-center mt-3 mb-5">
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

    </main>

    <?php include_once("padrao/footer.php") ?>
</body>

</html>