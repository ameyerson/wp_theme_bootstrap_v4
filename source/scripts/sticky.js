// Begin main.js
// ===================================
'use strict';

$(document).ready(function() {
    
    if ($('.be-sticky').length > 0) {

        var sticky = new Waypoint.Sticky({

          element: $('.be-sticky')[0]

        });
    }

});

if (!$('html').hasClass('touch') && $(window).width() > 1199) {

    $(window).on('scroll', function() { 

        if ( $(window).scrollTop() > $(window).height() ) {

            $('#to-the-top').addClass('stuck');

        } else { 

            $('#to-the-top').removeClass('stuck');

        }

    });
}