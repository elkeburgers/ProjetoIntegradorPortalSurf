let titleClick = document.getElementById('title');
let board = document.getElementById('board');

// // Sintaxe com arrow function
titleClick.addEventListener('click',()=>{
    fetch("http://apiadvisor.climatempo.com.br/api/v1/locale/city?name=Maresias&state=SP&token=8e4afcec4ce78dd8622ecdab56a7541e")
.then(result=> result.json())
.then(json=>{
        console.log(json.weather);
        show(json.weather);
    })
})

// listaNoticias é parâmetro da função show
let show = weatherMaresias =>{
    // for(let noticia of listaNoticias)
    weatherMaresias.forEach(function(noticia,posicao){

        // Para imprimir o valor de uma variável, coloco ${}
        let card = `
        <div class="card" style="width: 18rem;">
            <img src="${noticia.urlToImage}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title">${noticia.title}</h5>
                <p class="card-text">${noticia.description}</p>
                <a href="#" class="btn encontreBotao">Veja mais</a>
            </div>
        </div>`

        board.innerHTML += card;

    })

}
