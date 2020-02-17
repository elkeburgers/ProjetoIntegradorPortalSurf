// localizacao por cidade via geocoordenadas:
console.log("teste");

var map;

let botaoClick = document.getElementById('botao');

botaoClick.addEventListener('click', () => {

        var coord = document.getElementById("encontreLocal").value;
        console.log(coord);
        var coordParse = JSON.parse(coord);
        
        var coordLat = coordParse.lat;
        var coordLng = coordParse.lng;

        console.log(coordLat, coordLng);
        var center = new google.maps.LatLng(coordLat, coordLng);
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: center,
            radius: 10000,
            types: ['surf']
        });

        var marker = new google.maps.Marker({
            map: map,
            position: center
        });

        console.log("oi");
    })


