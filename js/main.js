

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


});