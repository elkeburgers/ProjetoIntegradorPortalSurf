<!--página da Home. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>

    <div id="demo" class="carousel slide" style="height:100%" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <!-- <div class="carousel-item active"> -->
            <div class="carousel-item active">
            <div id="carousel_1" class="img-fluid d-black homeBanner"></div>
                <div class="carousel-caption">
                    <h2 class="indexH2">Será que vai dar pra pegar aquela onda?</h2>
                    <p class="indexP">Ondas, ventos, e o que mais você precisa saber antes de entrar no mar</p>
                </div>
            </div>
            
            <div class="carousel-item">
            <div id="carousel_2" class="img-fluid d-black homeBanner"></div>
                <div class="carousel-caption">
                    <h2 class="indexH2">Encontre sua carona!</h2>
                    <p class="indexP">Faça companhia, divida o combustível, estamos todos juntos nessa onda!</p>
                </div>
            </div>
            <div class="carousel-item">
            <div id="carousel_3" class="img-fluid d-black homeBanner"></div>
                <div class="carousel-caption">
                    <h2 class="indexH2">Está a fim de desapegar?</h2>
                    <p class="indexP">Vamos ajudar o planeta e por um dinheiro extra no bolso?</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

    </div>

    <?php include_once("padrao/footer.php") ?>
</body>

</html>