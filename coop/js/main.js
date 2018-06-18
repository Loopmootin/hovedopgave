
$(window).on('load', function () {
    $('#disclaimer-modal').modal('show');
});


$(document).ready(function () {

    $(".crate-img").outerHeight($(".crate-text").outerHeight());

        $(".exp-bar").click(function () {
            $(this).siblings("div").toggle(300, function () {});
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
            }, function (response) {}, 'json').fail(function (response) {
                console.log('no response food item');
            });

            $("#user-name").val("");
            $("#user-mail").val("");
            $("#user-password").val("");
            $("#user-address").val("");
        });



    ///////////////////SEE FOODPLAN/////////////////////

    $("submit").click(function () {
        // get the handle of the clicked element
        var mySubmit = $(this);
        // get its id
        var submit_id = mySubmit.attr("id");
        // construct the fieldset id
        $("#" + submit_id).submit(function (b) {
            b.preventDefault();
            console.log('yo');
            var foodplanId = $("#foodplan-id").val();
            var foodplanSubmit = $("#foodplan-submit").val();

            $.post('php/foodplan_modal.php', {
                foodplanId: foodplanId,
                foodplanSubmit: foodplanSubmit
            }, function (response) {}, 'json').fail(function (response) {
                console.log('no response food item');
            });
        });
    }); 


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