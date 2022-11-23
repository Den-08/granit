$(document).ready(function () {
    $('.cert__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,        
        dots: true,
        prevArrow: $('.cert__left'),
        nextArrow: $('.cert__right'),
    });
});

$(document).ready(function () {
    $('.jobs__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // variableWidth: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
        prevArrow: $('.jobs__left'),
        nextArrow: $('.jobs__right'),
    });
});