@extends('layouts.templateSurf')

@section('titulo')
Portal Surf
@endsection



@section('conteudo')

<section class="d-flex" style="height: 89vh;">

    <div class="carousel slide carousel-fade w-100" data-ride="carousel">
        <div class="carousel-inner" style="height: 95vh;">
            <div class="carousel-item active" id="carousel-1"> 
                
                    <div id="texto-index"> 
                        <h2 >Aqui todo mundo é local!</h2>
                        <p class="flex-wrap">Previsão de ondas - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                    
                    </div>
                                       
            </div>
        <div class="carousel-item" id="carousel-2">
            
                <div id="texto-index">
                    <h2>Aqui todo mundo é local!</h2>
                    <p class="flex-wrap">Previsão de ondas - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                </div>
            
        </div>
        <div class="carousel-item" id="carousel-3" >
            
                <div id="texto-index"  >
                    <h2>Aqui todo mundo é local!</h2>
                    <p class="flex-wrap">Previsão de ondas - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                </div>
            
        </div>
    </div>
  
</section>

<section class=" d-flex flex-column flex-nowrap h-auto" >

    <article class="text-center p-5 d-flex flex-column" style="background:#d7dfea;color: ##404147;">
        <h2 class="font-weight-bold">Quem Somos</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique consectetur corporis sunt explicabo ducimus ratione perspiciatis rem quae aspernatur ad minima porro illum excepturi reiciendis cum iste earum, sed veniam.</p>
    </article>                            
    
    <div class="cards-home">
        <div class="desapegoHome1 col-6"></div>
            <div class="col-6 texto-index-2">                       
                <h3 class="font-weight-bold">Desapego</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur.</p>
                <a href="/desapego" class="btn btn-primary btn-lg botao-index">Dropar</a>
            </div>
    </div>
 
    <div class="cards-home" >
        <div class="col-6 texto-index-2"> 
            <h3 class="font-weight-bold">Blog</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur.</p>
            <a href="/blog" class="btn btn-primary btn-lg botao-index">Dropar</a>
        </div>
        <div class="blogHome1 col-6"></div>
    </div>


    <div class="cards-home" >
         <div class="previsaoHome1 col-6"></div>
            <div class="col-6    texto-index-2"> 
                <h3 class="font-weight-bold">Previsão</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur.</p>
                <a href="/previsao" class="btn btn-primary btn-lg botao-index">Dropar</a>
            </div>
    </div>
 
</section>
 
@endsection

