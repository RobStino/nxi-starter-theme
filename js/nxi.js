// Navbar Class Switch Script

var nav = $('#navbar');
var distance = $('#navbar').offset().top,
    $window = $(window);

$window.scroll(function() {
    if ( $window.scrollTop() >= distance ) {
        // Your div has reached the top
        nav.addClass('navbar-fixed');

      } else {
          nav.removeClass('navbar-fixed');
    }
});


// Flexslider
$(window).load(function() {
    $('.flexslider').flexslider({
		animation: "fade",
    });
 });
