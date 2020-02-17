<!-- box pop-up para avaliação de carona -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Carona</title>
</head>

<body>

    <!-- header provisorio enquanto nao temos JS para o pop-up -->
    <?php include_once("padrao/header.php") ?>

    <main class="mb-5">

        <section class="container cardBlog shadow-lg p-5 mt-5">
        <div class="text-center">
            <h1>AVALIE A SUA CARONA</h1>
            <br><br>
        </div>
            <div class="text-center">
                <p>Ajude outras pessoas a conhecer a sua carona.</p>
                <p> Avalie com uma nota de zero a cinco, sendo zero péssimo e cinco excelente:</p>
            </div>

            <!-- pontuacao -->
            <form action="/action_page.php">
                <div class="mt-5 mb-5 text-center font-weight-bold">
                    <div class="form-group row">
                        <label for="caronaPontualidade" class="col-sm-3 col-form-label">Pontualidade:</label>
                        <select class="form-control col-sm-2" id="caronaPontualidade">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="caronaEducacao" class="col-sm-3 col-form-label">Educação:</label>
                        <select class="form-control col-sm-2" id="caronaEducacao">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="caronaSimpatia" class="col-sm-3 col-form-label">Simpatia:</label>
                        <select class="form-control col-sm-2" id="caronaSimpatia">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="caronaEndereco" class="col-sm-3 col-form-label">Precisão no endereço:</label>
                        <select class="form-control col-sm-2" id="caronaEndereco">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <!-- Depoimento -->
                <div class="form-group mt-3 font-weight-bold">
                    <label for="text" class="col-sm-3 col-form-label">Depoimento:</label>
                    <textarea class="form-control col-sm-5" id="caronaDepoimento" rows="3"></textarea>
                </div>

                <!-- botao  -->
                <div class="mt-5 ml-3">
                    <a href="./caronasPerfil.php"><button type="button" class="btn encontreBotao">Dropar</button></a>
                </div>
            </form>
        </section>

    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>