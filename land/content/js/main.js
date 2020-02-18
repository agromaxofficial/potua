$(function () {
    if(window.innerWidth <= 990) {
        $('.slider').slick({
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight:
                true
        })
    }

    $('.btnCont a').on('click', function () {
        $('html, body').animate({
            scrollTop: $('#orderForm').offset().top
        }, 500)
    })
});