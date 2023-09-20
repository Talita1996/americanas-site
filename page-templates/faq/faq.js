jQuery(document).ready(function ($) {
    $('#nav-tab').slick({
        dots: true,
        infinite: false,
        speed: 300,
        centerMode: true,
        variableWidth: true,
        draggable: true,
        prevArrow: '<button type="button" class="slick-prev"><svg width="17" height="27" viewBox="0 0 17 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.9514 0.333334L16.5 2.85975L5.59871 13.6674L16.5 24.4736L13.9514 27L0.5 13.6674L13.9514 0.333334Z" fill="#939393"/></svg></button>',
        nextArrow: '<button type="button" class="slick-next"><svg width="17" height="27" viewBox="0 0 17 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.04865 0.333334L0.5 2.85975L11.4013 13.6674L0.5 24.4736L3.04865 27L16.5 13.6674L3.04865 0.333334Z" fill="#939393"/></svg></button>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                dots: false,
                arrows: false,
                slidesToShow: 2,
              }
            }
        ]
    });
})