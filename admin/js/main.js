

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

    $("input[type=password]").focus(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 35,
            transition: "0.5s"
        });
    });

    $("input[type=password]").blur(function () {
        if (!this.value) {
            $(this).siblings("label").css({
                fontSize: 16,
                top: 45,
                transition: "0.5s"
            });
        }
    });



    ///////////////////CREATE USER/////////////////////


    $("#create-user").submit(function (a) {
        a.preventDefault();
        var userName = $("#user-name").val();
        var userMail = $("#user-mail").val();
        var userPass = $("#user-password").val();
        var useraddress = $("#user-address").val();
        var userSubmit = $("#user-submit").val();

        $.post('php/create_user.php', {
            userName: userName,
            userMail: userMail,
            userPass: userPass,
            useraddress: useraddress,
            userSubmit: userSubmit
        }, function (response) {
        }, 'json').fail(function (response) {
            console.log('no response food item');
        });

        $("#user-name").val("");
        $("#user-mail").val("");
        $("#user-password").val("");
        $("#user-address").val("");
    });


    ///////////////////LOGIN USER/////////////////////

/*
    $("#login-user").submit(function (a) {
        a.preventDefault();
        var loginUserMail = $("#login-user-mail").val();
        var loginUserPassword = $("#login-user-password").val();
        var loginUserSubmit = $("#login-user-submit").val();

        $.post('php/login_user.php', {
            loginUserMail: loginUserMail,
            loginUserPassword: loginUserPassword,
            loginUserSubmit: loginUserSubmit
        }, function (response) {}, 'json').fail(function (response) {
            console.log('no response food item');
        });

        $("#login-user-mail").val("");
        $("#login-user-password").val("");
    });
*/



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
            url: "php/create_dish.php", // Url to which the request is send
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


///////////////////CREATE FOODPLAN/////////////////////

    $("#make-foodplan").submit(function (eve) {
        eve.preventDefault();
        var foodplanName = $("#foodplan-name").val();
        var foodplanSubmit = $("#foodplan-submit").val();
        var dishes = [];
        $(".foodplan-checkbox:checked").each(function () {
            dishes.push($(this).val());
        });

        console.log(dishes);

        $.post('php/create_foodplan.php', {
            foodplanName: foodplanName,
            foodplanSubmit: foodplanSubmit,
            dishes: dishes
        }, function (response) {
        }, 'json').fail(function (response) {
            console.log('no response food item');
        });

        $("#foodplan-name").val("");
    });


///////////////////DELETE FOODPLAN/////////////////////

    $("#delete-foodplan").submit(function (f) {
        f.preventDefault();
        var foodplanShowSubmit = $("#foodplan-show-submit").val();
        var foodplans = [];
        $(".foodplans-checkbox:checked").each(function () {
            foodplans.push($(this).val());
        });

        console.log(foodplans);

        $.post('php/delete_foodplan.php', {
            foodplanShowSubmit: foodplanShowSubmit,
            foodplans: foodplans
        }, function (response) {}, 'json').fail(function (response) {
            console.log('no response food item');
        });

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