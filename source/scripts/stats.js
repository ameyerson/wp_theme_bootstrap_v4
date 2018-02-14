'use strict';


var scrollOffset = 100,
    totalTime = 60,
    j = 60,
    time = 50,
    start,
    end,
    increment;

const addCommas = (x) => {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
};
const removeCommas = (x) => {
  return x.toString().replace(/,/g, '');
};

function incrementFunction(object, increment) {

    var currentVal = parseInt(removeCommas(object.html()));
    var newVal = currentVal + increment;

    object.html(addCommas(newVal));
}

if (!$('html').hasClass('touch') && $(window).width() > 1199) {
    console.log('here');

    $(window).on('load resize scroll', function() { 

        $('.counter .data.ready').each(function() { 

            if ( $(this).offset().top < $(window).scrollTop() + $(window).height() - scrollOffset ) {

                start = parseInt($(this).attr('data-zero'));
                end = parseInt($(this).attr('data-max'));

                increment = Math.ceil((end - start) / totalTime);

                $(this).html(0);

                for (var i = 0; i < j; i++) {
                    setTimeout(incrementFunction, i * time, $(this), increment);
                }

                $(this).removeClass('ready');
            }

        });

    });
}