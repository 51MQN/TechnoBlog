$(document).ready(function (){
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    $('body > header').on('click', ".burger.closed i", function () {
        $('.burger.closed').removeClass('closed').addClass('opened');
        $('nav.menu').animate({
            height: '350px'
        }, 1000);
    });

    $(window).resize(function () {
        if ($(window).width() > 768) {
            $("nav.menu").attr("style", "height: 100%");
        }
        else {
            if ($('.burger.opened').length > 0){
                $("nav.menu").attr("style", "height: 450px");
            }
            else{
                $("nav.menu").attr("style", "height: 0");
            }
        }
    });

    $('body > header').on('click', ".burger.opened i", function () {
        $('.burger.opened').removeClass('opened').addClass('closed');
        $('nav.menu').animate({
            height: '0'
        }, 1000);
    });
});