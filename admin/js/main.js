

$(document).ready(function () {

    ////////////////FORM ITEMS///////////////////

    $(".exp-bar").click(function () {
        $(this).siblings("div").toggle(300, function () {
        });
    });

    $("input[type=text]").focus(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 35,
            transition: "0.5s"
        });
    });

    $("input[type=text]").blur(function () {
        if (!this.value) {
            $(this).siblings("label").css({
                fontSize: 16,
                top: 45,
                transition: "0.5s"
            });
        }
    });

    $("input[type=number]").focus(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 35,
            transition: "0.5s"
        });
    });

    $("input[type=number]").blur(function () {
        if (!this.value) {
            $(this).siblings("label").css({
                fontSize: 16,
                top: 45,
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
        console.log(productPrice, productWeight);

        $.post('php/creator.php', {
                    productName: productName,
                    productWeight: productWeight,
                    productPrice: productPrice,
                    productSubmit: productSubmit
                }, function (response) {
            if (response == 'success') {
            }
        }, 'json').fail(function (response) {
            console.log('no response food item');
        });

        $("#product-name").val("");
        $("#product-weight").val("");
        $("#product-price").val("");
    });


    
    ///////////////////CREATE DISH/////////////////////

    $('#file').on('change', function () {
        var fileName = '';
        fileName = $(this).val();
        $('#file-selected').html(fileName);
    });

    $("#upload-dish").submit(function (e) {
        e.preventDefault();
        $("#message").empty();
        var dishName = $("#dish-name").val();
        
        var foodItems = [];
        $(".food-item-checkbox:checked").each(function () {
            foodItems.push($(this).val());
        });

        var dishSubmit = $("#dish-submit").val();

        var formData = new FormData($(this)[0]);
        formData.append('dishName', dishName);
        formData.append('foodItems', foodItems);

        $.ajax({
            url: "php/upload_img.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false, // To send DOMDocument or non processed data file it is set to false
            success: function (data) // A function to be called if request succeeds
            {
                $("#message").html(data);
            }
        });
        console.log(dishName);
        console.log(foodItems);
    });



 ///////////////////SEARCH FOOD ITEMS/////////////////////

    $("#search-food-items").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#food-item-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });




///////////////////SEARCH DISHES/////////////////////

    $("#search-food").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#food-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});