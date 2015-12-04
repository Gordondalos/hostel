$(document).ready(function() {

    $('#toggle_menu .fa-bars').click(function () {

      //  $('.hidden_menu').slideToggle(1000);
        $('.hidden_menu').animate({
            left: "+=300"
        }, 700, function() {
            // Animation complete.
        });

    });

});

//hidden_menu


$(document).ready(function() {

    $('#hidden_menu').click(function () {

       // $('.hidden_menu').slideToggle(1000);

        $('.hidden_menu').animate({
            left: "-=300"
        }, 700, function() {
            // Animation complete.
        });

    });

});

