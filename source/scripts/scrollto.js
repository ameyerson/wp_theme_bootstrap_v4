// ===================================
// Begin scrollto.js
// ===================================
'use strict';

$(document).ready(function() {

    $('.scroll-down-indicator').click(function(e) {

        var $target = $(this).attr('href');

        e.preventDefault();

        $target = $(this).attr('href');
        $('html, body').animate(
            {
                scrollTop: $($target).offset().top - 180
            }, 
            600, 
            'easeInOutCubic'
        );
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

