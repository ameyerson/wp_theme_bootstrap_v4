// ===================================
// Begin image.js
// ===================================
'use strict';

function fadeImageBlock(elm) {

    var src = elm.css('background-image'),
        url = src.match(/\((.*?)\)/)[1].replace(/('|")/g,'');

    var img = new Image();

    img.onload = function() {
        elm.fadeIn('slow', function() {

            $(this).addClass('loaded');
            $(this).siblings('.fade-sibling').addClass('loaded');

        });
    };

    img.src = url;

    if (img.complete) {
        img.onload();
    }

    return true;

}

$(document).ready(function() {

    $('.fade-image').each(function() {

        fadeImageBlock($(this));

    });

});
    