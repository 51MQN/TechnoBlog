$(document).ready(function () {
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

    $(".search-form").on("submit", function (e) {
        e.preventDefault();
        if ($(".autocomplete input[name='filter']").val().match(/[^\&\w\s+,.!?@_-]/g)) {
            alert("Some invalid characters were found!");                  
        } else {
            window.location.href = "/home/posts/search/filter=" + escape($(".autocomplete input[name='filter']").val());
        }
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
                $("nav.menu").attr("style", "height: 350px");
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

    $.ajax({
        type: 'GET',
        url: "/post/autocomplete_filter/",
        success: function (jsonData) {
            var autoList = $.parseJSON(jsonData);

            $(".autocomplete input").autocomplete(autoList, function(){});

        }
    });
});