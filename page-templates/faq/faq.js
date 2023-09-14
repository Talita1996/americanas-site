jQuery(document).ready(function ($) {
    $('#nav-tab').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });
})