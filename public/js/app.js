require('../../resources/js/bootstrap');

$(document).ready(function() {

    //owl carousel fro blog
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        dots: false,
        nav: true
    });

});