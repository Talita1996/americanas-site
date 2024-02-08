jQuery(document).ready(function ($) {
    $('#nav-tab').slick({
        dots: true,
        infinite: true,
        speed: 300,
        centerMode: true,
        variableWidth: true,
        draggable: true,
        prevArrow: '<span class="slick-prev"><button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.80731 2.32505C7.24071 1.89165 7.94083 1.89165 8.37424 2.32505L17.149 11.0998C17.6491 11.5999 17.6491 12.4067 17.149 12.9068L8.37424 21.6749C7.94083 22.1084 7.23405 22.1084 6.80064 21.6749C6.36723 21.2415 6.36723 20.5348 6.80064 20.1013L14.902 11.9933L6.80731 3.89198C6.3739 3.45858 6.3739 2.75846 6.80731 2.32505Z" fill="#880021"/></svg></button></span>',
        nextArrow: '<span class="slick-next"><button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.80731 2.32505C7.24071 1.89165 7.94083 1.89165 8.37424 2.32505L17.149 11.0998C17.6491 11.5999 17.6491 12.4067 17.149 12.9068L8.37424 21.6749C7.94083 22.1084 7.23405 22.1084 6.80064 21.6749C6.36723 21.2415 6.36723 20.5348 6.80064 20.1013L14.902 11.9933L6.80731 3.89198C6.3739 3.45858 6.3739 2.75846 6.80731 2.32505Z" fill="#880021"/></svg></button></span>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                arrows: false,
                slidesToShow: 2,
              }
            }
        ]
    });
})