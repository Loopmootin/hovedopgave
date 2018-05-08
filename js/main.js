

$(document).ready(function () {

    $(".exp-bar").click(function () {
        $(this).siblings("div").toggle(300, function () {
        });
    });

    $("input[type=text]").click(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 30,
            transition: "0.5s"
        });
    });

    $("input[type=number]").click(function () {
        $(this).siblings("label").css({
            fontSize: 10,
            top: 30,
            transition: "0.5s"
        });
    });
});