<!-- opção de header para o portal. ao esta lincado em nenhuma pagina. -->

<?php include_once("../config/variaveis.php") ?>

<header>
    <section class="navbar">
        <a href="./index.php"><img src="imagens/Logo_degrade.png" alt="logo portal do surf"></a>
        <form class="form-inline my-2 my-lg-0 justify-content-center align-items-center col-lg-6">
            <input class="form-control mr-sm-4 col-lg-8" type="search" placeholder="Encontre no Portal do Surf!" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 col-lg-2" type="submit">Busca</button>
        </form>
        <nav>
            <ul class="nav font-weight-bold">
                <?php if(isset($usuario) && $usuario != []) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sair</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="paginaLogin.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastroUsuario.php">Cadastro</a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </section>
    <div class="container mt-1 mb-3">
        <nav class="nav-bar d-flex justify-content-center">
            <ul class="nav font-weight-bold" id="headerNavbar">
                <li class="nav-item">
                    <a class="nav-link" href="previsao.php">Previsão</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="caronas.php">Carona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="desapego.php">Desapego</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="encontre.php">Encontre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticias.php">Notícias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target=_blank href="https://www.isasurf.org/">ISA</a>
                        <a class="dropdown-item" target=_blank href="https://www.worldsurfleague.com/">World Surf League</a>
                        <a class="dropdown-item" target=_blank href="http://wsllatinamerica.com/">WSL Latin America</a>
                        <a class="dropdown-item" target=_blank href="http://www.abrasp.com/">ABRASP</a>
                        <a class="dropdown-item" target=_blank href="https://magicseaweed.com/">Magic Sea Weed</a>
                    </div>
                </li>
        </nav>
                </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</header>