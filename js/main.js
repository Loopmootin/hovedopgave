

$(document).ready(function () {

    ////////////////MENU///////////////////

    $("#burger-menu").click(function () {
        $(".menu-item-mobile").slideToggle(300, function () {});
    });


    ////////////////FORM ITEMS///////////////////

    $(".exp-bar").click(function () {
        $(this).siblings("div").toggle(300, function () {
        });
    });

    $("input[type=text]").focus(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 30,
            transition: "0.5s"
        });
    });

    $("input[type=text]").blur(function () {
        $(this).siblings("label").css({
            fontSize: 16,
            top: 39,
            transition: "0.5s"
        });
    });

    $("input[type=number]").focus(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 30,
            transition: "0.5s"
        });
    });

    $("input[type=number]").blur(function () {
        $(this).siblings("label").css({
            fontSize: 16,
            top: 39,
            transition: "0.5s"
        });
    });


    /////////////////// UPLOAD IMAGE/////////////////////

    $("#uploadimage").on('submit', (function () {
        e.preventDefault();
        $("#message").empty();
        $.ajax({
            url: "upload_img.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false, // To send DOMDocument or non processed data file it is set to false
            success: function (data) // A function to be called if request succeeds
            {
                $("#message").html(data);
            }
        });
    }));

});