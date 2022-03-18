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

    
    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: false,
        nav: false,
        items: 1,
        loop: true,
        autoplay: 2000,
        autoplaySpeed: 3000,
    });

});

// header x effect
function myFunction(x) {
    x.classList.toggle("change");
}

// photos tabs
document.getElementById("ring").style.display = "block";
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}