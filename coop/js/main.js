

$(document).ready(function () {

});

function initMap() {

    var warehouse = { lat: -3.060109, lng: -60.055145 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: warehouse
    });

    var marker = new google.maps.Marker({
        position: warehouse,
        map: map
    });
}