'use strict';

if (!$('html').hasClass('touch') && $(window).width() > 1199) {

    $(window).on('scroll', function() { 

        if ( $(window).scrollTop() > 100 ) {

            $('#floating-contact').addClass('stuck');

        } else { 

            $('#floating-contact').removeClass('stuck');

        }

    });
}

$('#floating-contact').on('click', function(e) {

    e.preventDefault();
    
});

// Waypoints for in-page navigation
if ($('nav.in-page').length > 0) {

    var sticky = new Waypoint.Sticky({

        element: $('nav.in-page')[0]

    });
}