

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
        if (!this.value) {
            $(this).siblings("label").css({
                fontSize: 16,
                top: 39,
                transition: "0.5s"
            });
        }
    });

    $("input[type=number]").focus(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 30,
            transition: "0.5s"
        });
    });

    $("input[type=number]").blur(function () {
        if (!this.value) {
            $(this).siblings("label").css({
                fontSize: 16,
                top: 39,
                transition: "0.5s"
            });
        }
    });


    ///////////////////CREATE PRODUCT/////////////////////


   $("#upload-product").submit(function(event) {
        event.preventDefault();
        var productName = $("#product-name").val();
        var productWeight = $("#product-weight").val();
        var productPrice = $("#product-price").val();
        var productSubmit = $("#product-submit").val();
        $("#product-message").load("creator.php", {
            productName: productName,
            productWeight: productWeight,
            productPrice: productPrice,
            productSubmit: productSubmit
        });
    });


    ///////////////////UPLOAD IMAGE/////////////////////

    $('#file').on('change', function () {
        var fileName = '';
        fileName = $(this).val();
        $('#file-selected').html(fileName);
    });

    $("#uploadimage").submit(function(e) {
        e.preventDefault();
        $("#message").empty();
        $.ajax({
            url: "php/upload_img.php", // Url to which the request is send
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
    });

});