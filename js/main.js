

$(document).ready(function () {

    $(".plus-icon").click(function () {
        $(this).siblings("div").toggle(300, function () {
        });
    });

});