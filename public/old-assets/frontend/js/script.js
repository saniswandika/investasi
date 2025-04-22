// HEADER ANIMATION
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 40) {
        $('.main-header-scroll').removeClass('main-header--transparent');
    } else {
        $('.main-header-scroll').addClass("main-header--transparent");
    }
});
// SLICK
$('.card-slider').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        {
        breakpoint: 575,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.card-number').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    // arrows: false,
    responsive: [
        {
        breakpoint: 991,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1
            }
        },
        {
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        {
        breakpoint: 575,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
// Gallery Photos
$('.gallery-photos').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true
});
// Card Slider Front
$('.card-slider-front').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
        breakpoint: 991,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

// SHOW MENU OFFERS (West Java Offers)
$('#show-menu-offers').on("click", function(){
    $('body').addClass('menu-offers-open');
    $('.west-java-offers--menu').addClass('active');
  });
$('#close-menu-offers').on("click", function(){
    $('body').removeClass('menu-offers-open');
    $('.west-java-offers--menu').removeClass('active');
});
// MENU NAVIGATION
$('#openMenuSideNav, #openMenuSideNav2').click(function(){
    $('#sideMenuNav').addClass('active');
    $('.curtain').fadeIn(500);
    $('body').addClass('menu-navigation-open');
});
$('#closeMenuSideNav').click(function(){
    $('#sideMenuNav').removeClass('active');
    $('.curtain').fadeOut(500);
    $('body').removeClass('menu-navigation-open');
});
// MENU SIGNIN
$('#openMenuSignIn, #openMenuSignIn2').click(function(){
    $('#sideMenuSignIn').addClass('active');
    $('.curtain').fadeIn(500);
    $('body').addClass('menu-navigation-open');
});
$('#closeMenuSignIn').click(function(){
    $('#sideMenuSignIn').removeClass('active');
    $('.curtain').fadeOut(500);
    $('body').removeClass('menu-navigation-open');
});
// STICKY
$(".sticky").stickybits({
    useStickyClasses: true,
    stickyBitStickyOffset: 90,
});
// EASY ZOOM
// Instantiate EasyZoom instances
var $easyzoom = $('.easyzoom').easyZoom();

// Get an instance API
var api = $easyzoom.data('easyZoom');

// NICE SELECT
// $(document).ready(function(){
//     $('select').niceSelect();
// });

// TEST SWALL
$('#btnSubscribe').click(function(){
    Swal.fire({
        type: 'success',
        title: 'Done!',
        text: 'Thanks for subscribe our news!'
    });
});
