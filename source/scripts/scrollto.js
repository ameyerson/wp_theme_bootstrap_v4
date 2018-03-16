// ===================================
// Begin scrollto.js
// ===================================
'use strict';

function scrollToDiv(target) {

    $('html, body').animate(
        {
            scrollTop: $(target).offset().top - 100
        }, 
        600
    );

}

$(document).ready(function() {

    $('.scroll-to-link').click(function(e) {

        var $target = $(this).attr('href');

        e.preventDefault();

        scrollToDiv($target);

    });    

    $('#menu-footer a').click(function(e) {



        var $target = $(this).attr('href');
        var $hash = '#' + $target.split('#')[1];

        $('.scroll-to-link').each(function(){

            if ($(this).attr('href') === $hash) {

                e.preventDefault();
                $(this).click();
            }

        });

    });


    var match = location.hash.match(/^#?(.*)$/)[1];
    $('.scroll-to-link').each(function(){

        if ($(this).attr('href') === '#' + match) {
            $(this).click();
        }

    });

});

if (!$('html').hasClass('touch') && $(window).width() > 1199) {

    $(window).on('load resize scroll', function() {

        var $offset = 50;

        $('.animation-ready').each(function() {

            if ( $(this).offset().top < $(window).scrollTop() + $(window).height() - $offset ) {

                $(this).removeClass('animation-ready').addClass('animated');

            }

        });

    });

} else {

    $('.animation-ready').each(function() {

        $(this).removeClass('animation-ready').addClass('animated');

    });

}
