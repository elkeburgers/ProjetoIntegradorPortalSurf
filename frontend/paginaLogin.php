<!-- Elke: página de aviso que o usuário não está logado, com links para login e para cadastro. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>   

    <!-- aviso de login -->
    <div class="container" >
        <h1 class="text-center mt-5">OPS! VOCÊ PRECISA ESTAR LOGADO</h1>
        <h2 class="text-center">PARA ACESSAR ESTA PÁGINA!</h2>
        <h4 class="container d-flex justify-content-center text-center col-8 mt-5">Faça seu login abaixo, ou se for o seu primeiro acesso, aproveite para se cadastrar e aproveitar tudo o que o Portal do Surf tem para oferecer!</h4>
    </div>
    
    <!-- campo para login -->
    <div class="d-flex justify-content-center mt-5">
        <form class="form-inline" action="/action_page.php">
            <label for="email" class="mr-sm-2">Email/ Login:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email">
            <label for="pwd" class="mr-sm-2">Senha:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="pwd">
            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Lembrar de mim
                </label>
            </div>
            <!-- Link para a Home até fazermos o back-end de login com retorno para a página solicitada -->
            <a href="index.php" class="btn encontreBotao mb-2">Dropar</a>
        </form>
    </div>
    
    <!-- botao para cadastro -->
    <div class="d-flex justify-content-center mt-5 mb-5">
        <a href="cadastroUsuario.php" class="btn encontreBotao mb-2">Primeiro acesso</a>
    </div>
    

    <?php include_once("padrao/footer.php") ?>   
</body>
</html>