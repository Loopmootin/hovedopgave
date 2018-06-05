
$(window).on('load', function () {
    $('#disclaimer-modal').modal('show');
});


$(document).ready(function () {

    $(".crate-img").outerHeight($(".crate-text").outerHeight());

});

function initMap() {

    var warehouse = { lat: 55.661315, lng: 12.360166 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: warehouse
    });

    var marker = new google.maps.Marker({
        position: warehouse,
        map: map
    });
}