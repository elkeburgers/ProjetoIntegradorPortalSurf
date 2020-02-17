// deveria retornar todas as localidades vinculadas a palavra surf (types) na area de 10 km (radius) do centro de maresias (LatLng), mas não estah funcionando




console.log("teste");

var map;

// let botaoClick = document.getElementById('botao');

// var guaruja = [
//     {lat: -24.0022138, lng: -46.282744,14},
// ]


botaoClick.addEventListener('click', () => {
        // function iniciarMap() {

        // var coord = {
        //     lat: -23.791516,
        //     lng: -45.5627291
        // };

        var center = new google.maps.LatLng(-23.791516, -45.5627291)
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            // center: coord,
            center: center,
        });

        var request = {
            location: center,
            radius: 10000,
            types: ['surf']
        };

        var service = new google.maps.places.PlacesService(map);

        service.nearbySearch(request, callback);
 })

    function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                createMarker(results[i]);
            }
        }
    }

    function createMarker(place) {
        var placeLoc = place.geometric.location;
        var marker = new google.maps.Marker({
            map: map,
            position: place.geometric.location
        });

        console.log("oi");
        // }
    }

    // google.maps.addDomListener(window, 'load', iniciarMap);
