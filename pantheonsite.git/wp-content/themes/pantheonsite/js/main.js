/*global $ */
$(document).ready(function() {




    $('#Search').click(function() {
        $('#form-layout-search').toggleClass('search-field');
    });

    $('#Search-mobile').click(function() {
        $('#form-layout-search-mobile').toggleClass('search-field');
    });


    new WOW().init();

});



$('#search-button, #reset-search-button').on('click', function(event) {
    event.preventDefault();
    $('#search-input').val('');
    $('#search-bar').toggleClass('open');
    $('#search-button').closest('li').toggleClass('active');

    if ($('#search-bar').hasClass('open')) {
        /* I think .focus doesn't like css animations, set timeout to make sure input gets focus */
        setTimeout(function() {
            $('#search-input').focus();
        }, 100);
    }
});

$(document).on('keyup', function(event) {
    if (event.which == 27 && $('#search-bar').hasClass('open')) {
        $('#search-button').trigger('click');
    }
});




$(document).on("scroll", function() {
    if ($(document).scrollTop() > 20) {
        $(".menu-main").removeClass("large").addClass("small");
    } else {
        $(".menu-main").removeClass("small").addClass("large");
    }
});



$('.slider_kennedy_edit').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',

                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

$('.slick-slider-1').slick({
    centerMode: true,
    slidesToShow: 3,
    dots: false,
    arrows: true,
    swipe: true,

    swipeToSlide: true,


    responsive: [


        {
            breakpoint: 1200,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',

                slidesToShow: 3
            }
        },


        {
            breakpoint: 991,
            settings: {
                arrows: true,
                centerMode: true,
                swipe: true,

                centerMode: true,
                swipeToSlide: true,
                dots: false,
                slidesToShow: 1
            }
        },

    ]


});

$('.banner-slider-homepage').slick({
    dots: true,
    infinite: true,
    speed: 300,
    adaptiveHeight: false,
    autoplay: true,
    slidesToShow: 1,
    adaptiveHeight: true
});


$('.slider-the-report').slick({
   
    infinite: true,
    speed: 3000,
    adaptiveHeight: false,
    autoplay: true,
    slidesToShow: 1,
    adaptiveHeight: true
});

$('.slider_product').slick({

    slidesToShow: 3,
    dots: false,
    arrows: true,
    swipe: true,

    swipeToSlide: true,


    responsive: [


        {
            breakpoint: 1200,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',

                slidesToShow: 2
            }
        },


        {
            breakpoint: 991,
            settings: {
                arrows: true,

                swipe: true,


                swipeToSlide: true,
                dots: false,
                slidesToShow: 1
            }
        },

    ]


});