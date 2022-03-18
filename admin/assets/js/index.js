// js
$(document).ready(function(){

    // header scroll animation
    var $window = $(window);
    var $header = $("header");
    function sticky(){
        var $window_top = $window.scrollTop();

        $.each($header, function(){
            if($window_top >= 180){
                $(this).addClass('sticky_navigation');
            }
            else{
                $(this).removeClass('sticky_navigation');
            }
        });
    }
    $window.on('scroll resize', sticky);
    $window.trigger('scroll');

    // header btn effect
    $(".navbar-toggler").on('click', function(){
        $header.addClass('sticky_navigation');
    });

});

// header x effect
function myFunction(x) {
    x.classList.toggle("change");
}
