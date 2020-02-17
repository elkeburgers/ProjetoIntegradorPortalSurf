<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/da4fc1a0ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  
    <header class="cabecario p-5">
      
         
            <a href="./index.php"><img src="Logo_white.png" id="logo" alt=""></a>
                
    
            <nav class="navbar navbar-expand-lg headerNavbar" role="banner">
                 <ul class="nav w-100 justify-content-between" >
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
                        <div class="gaveta-icones">

                        <i class="fab icone fa-facebook-f"></i>
                        <i class="fab icone fa-instagram"></i> 
                        <i class="fab icone fa-twitter"></i>                 
                        
                        </div>
                            
                     </nav>
            <!-- <nav>
                            <ul class="nav">
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
                    </nav> -->
                
                
        </div>
        
    </header>
    <!-- <div id="faixa-header"> </div> -->
 
            
 
    <main class="" style="height:1253px;">
   
    <section class="d-flex  h-50 ">

        <div class="carousel slide carousel-fade w-100" data-ride="carousel">
            <div class="carousel-inner h-100 ">
                <div class="carousel-item active" id="carousel-1">
                    <div class="carousel-gaveta">
                    <div id="texto-index">
                            <h2>Aqui todo mundo é local!</h2>
                            <p class="flex-wrap">Previsão de ondas - Carona para praias - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                            
                    </div>
                    <div class="form-group botao">
                            <button type="livedemo" class="btn btn-primary btn-lg botao-um"> Cadastre-se</button>
                            <button type="livedemo" class="btn btn-primary btn-lg botao-dois"> Login</button>
                            
                    </div>                    
                    </div>
                </div>
                <div class="carousel-item" id="carousel-2">
                    <div id="texto-index">
                            <h2>Aqui todo mundo é local!</h2>
                            <p class="flex-wrap">Previsão de ondas - Carona para praias - Desapego de pranchas e afins Entre e sinta a vibe do site!</p>
                            
                    </div>
                    <div class="form-group botao">
                            <button type="livedemo" class="btn btn-primary btn-lg botao-um"> Login</button>
                            <button type="livedemo" class="btn btn-primary btn-lg botao-dois"> Cadastre-se</button>
                    </div> 
                    
                </div>
                <div class="carousel-item" id="carousel-3">
                    <div id="texto-index">
                            <h2>Aqui todo mundo é local!</h2>
                            <p class="flex-wrap">Previsão de ondas - Carona para praias - Desapego de pranchas e afins Entre e sinta a vibe do site!</p>
                            
                    </div>
                    <div class="form-group botao">
                            <button type="livedemo" class="btn btn-primary btn-lg botao-um"> Login</button>
                            <button type="livedemo" class="btn btn-primary btn-lg botao-dois"> Cadastre-se</button>
                    </div> 
                </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
             </a>
        </div>
        
        
    </section>

    <section class="d-flex flex-column flex-nowrap   h-100 ">

        <article class="text-center p-5 d-flex flex-column justify-content-center h-25" style="background:#dededf; color:#53858d;">
        <h2>Quem Somos</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique consectetur corporis sunt explicabo ducimus ratione perspiciatis rem quae aspernatur ad minima porro illum excepturi reiciendis cum iste earum, sed veniam.
    
        </p>
        </article>                            
            
       <div class="cards-home">
            <div class="desapego1    col-6"></div>
                <div class="col-6    texto-index-2">                       
                    <h3 class="font-weight-bold">Desapego</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni molestias neque temporibus fuga expedita aliquid voluptatem ab consequuntur doloremque itaque deleniti, odio, quae vero voluptatum deserunt, accusantium eligendi tempora labore.</p>
                    <a href="#" class="btn btn-primary btn-lg botao-tres">Dropar</a>
                </div>
        </div>
         
        <div class="cards-home" >
                <div class="col-6    texto-index-2"> 
                    <h3 class="font-weight-bold">Caronas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni molestias neque temporibus fuga expedita aliquid voluptatem ab consequuntur doloremque itaque deleniti, odio, quae vero voluptatum deserunt, accusantium eligendi tempora labore.</p>
                    <a href="#" class="btn btn-primary btn-lg botao-tres">Dropar</a>
                </div>
                <div class="caronas1 col-6"></div>
        </div>
        

        <div class="cards-home " >
             <div class="previsao1    col-6"></div>
                 <div class="col-6    texto-index-2"> 
                    <h3 class="font-weight-bold">Previsão</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni molestias neque temporibus fuga expedita aliquid voluptatem ab consequuntur doloremque itaque deleniti, odio, quae vero voluptatum deserunt, accusantium eligendi tempora labore.</p>
                     <a href="#" class="btn btn-primary btn-lg botao-tres">Dropar</a>
                </div>
        </div>
         
    </section>
  
  
  
  
  
        <footer class="shadow p-3 rounded footer">
            <p>© 2019 All rights reserved - contato@portalsurf.com.br</p>
        </footer>  
        
       
        
    </main>
 
   
</body>
</html>