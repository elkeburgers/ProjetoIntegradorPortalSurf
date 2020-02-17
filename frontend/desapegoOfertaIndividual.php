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

    <main class="container" style="height:1000px;">

        <section class="d-flex p-3 mt-4 ofertaIndivid">
            <!-- imagens oferta -->
            <div class="row col-xl-6 col-lg-12 col-sm-12 w-50 h-50  mr-2">
                <img src="imagens/img-desapego/prancha_6.jpg" alt="imagem de prancha"
                    class="img-fluid border border-dark img-oferta-individual">
            </div>
    
            <!-- informacoes oferta -->
            <div class="row col-xl-6 col-lg-12 col-sm-12 h-25">
                <h1 class="font-italic font-weight-bold">Prancha Surf Power Light</h1>
                <p class="text-muted p-3" style="font-size:12px;">MARCA: POWER LIGHT<br>MODELO: SOFT 6.6<br>REF:
                    700<br>GARANTIA: 07 DIAS APÓS O RECEBIMENTO DO PRODUTO<br>DISPONIBILIDADE: ENTREGO DEPENDENDO DO
                    LOCAL<br>ITENS INCLUSOS: 1 PRANCHA DE SURF SOFT 6.6, 1 PARAFINA</p>
                <div class="card border border-light text-center" style="width: 11rem; height: 10rem;">
                    <img src="imagens/img-desapego/hang-loose.jpg" style="height:110px;" class="card-img-top"
                        alt="imagem prancha">
                    <div class="card-body p-2 bd-highlight" style="font-size:12px;">
                        <p class="card-text font-weight-bold">LOCAL: MARESIAS- SP<br> TEL: (12) 99987-XXXX</p>
                    </div>
                </div>
            </div>

        </section>

        <!-- botão voltar -->
        <div class="container text-center mt-5 mb-5">
            <!-- botao voltar -->
            <a href='desapegoOferta.php'><button class='btn encontreBotao'>Voltar</button></a>
        </div>

    </main>

    <?php include_once("padrao/footer.php") ?>

</body>

</html>