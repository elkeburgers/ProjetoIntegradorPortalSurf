<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include_once("padrao/header.php") ?>

    <!-- navegacao entre praias -->
    <main class="container p-0" id="baleiaTopo">
        <h1>BALEIA</h1>
        <nav class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="nav justify-content-between">
                <li class="nav-link"><a href="zjuquehy.php">PRAIA ANTERIOR</a></li>
                <li class="nav-link"><a href="previsao.php">VOLTAR</a></li>
                <li class="nav-link"><a href="zmaresias.php">PROXIMA PRAIA</a></li>
            </ul>
        </nav>

        <!-- informacoes gerais fixas sobre a praia -->
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <img src="imagens/img-previsao/baleia.jpeg" class="img-fluid" style="width: 400px;"
                        alt="responsive image">
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <p>Destaque para o lendário Canto Mágico (canto direito), onde encontram-se as melhores valas da
                        praia.</p>
                    <ul>
                        <li>Tamanho - 2 a 8 pés</li>
                        <li>Ondulação ideal - Sudeste | Sul</li>
                        <li>Vento ideal - Quadrante Norte</li>
                        <li>Grau de dificuldade - Alta | Média</li>
                        <li>Melhor época - Outono | Primavera</li>
                        <li>Constância - Baixa</li>
                        <li>Crowd - Intenso</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- condicoes do dia -->
        <div class="container mt-2">
            <h4>Condições atuais:</h4>
            <img src="imagens/img-previsao/prevdia.png" class="img-fluid" alt="condicoes atuais">
        </div>

        <!-- sessão encontre vinculada a busca do google -->
        <div class="container p-0 mt-2">
            <h4>Encontre nesta área:</h4>
            <select class="form-control font-accent tt-input mx-80" name="encontre">
                <option disabled selected>Encontre:</option>
                <option value=”una”>Acomodação</option>
                <option value=”juquehy”>Surf Shop</option>
                <option value=”maresias”>Manutenção</option>
                <option value=”baleia”>CARONA</option>
            </select>
        </div>

        <div class="container mt-3 p-0">
            <img src="imagens/img-previsao/mapa.png" class="img-fluid" alt="condicoes atuais">
        </div>

        <!-- cards desapego vinculados a localizacao da praia -->
        <div class=container>
            <h4>Itens a venda nesta área:</h4>
            <div class="row justify-content-center">
                <img src="imagens/img-previsao/venda1.png" class="img-fluid" alt="condicoes atuais">
                <img src="imagens/img-previsao/venda1.png" class="img-fluid" alt="condicoes atuais">
                <img src="imagens/img-previsao/venda1.png" class="img-fluid" alt="condicoes atuais">
            </div>
        </div>

        <!-- previsao do proximos sete dias -->
        <div class="container mt-2">
            <h4>Previsão dos próximos 7 dias:</h4>
            <img src="imagens/img-previsao/previsurf.png" class="img-fluid" alt="condicoes atuais">
        </div>

        <!-- mapa oceanografico -->
        <div class="container mt-2">
            <h4>Pra quem manja:</h4>
            <img src="imagens/img-previsao/manja.png" class="img-fluid" alt="condicoes atuais">
        </div>

        <!-- carga de fotos de usuarios vinculados a praia -->
        <div class="container mt-2">
            <h4>Fotos da galera:</h4>
            <img src="imagens/img-previsao/fotosgalera.png" class="img-fluid" alt="condicoes atuais">
        </div>

        <!-- botao topo -->
        <div class="container text-center mt-5 mb-5">
            <a href="#baleiaTopo" class="btn encontreBotao">Topo</a>
        </div>

    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>