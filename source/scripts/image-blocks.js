// ===================================
// Begin image-block.js
// ===================================
'use strict';

function fadeImageBlock(elm) {

    var src = elm.css('background-image'),
        url = src.match(/\((.*?)\)/)[1].replace(/('|")/g,'');

    var img = new Image();

    img.onload = function() {
        elm.fadeIn('slow', function() {

            $(this).addClass('loaded');

        });
    };

    img.src = url;

    if (img.complete) {
        img.onload();
    }

    return true;

}

$(document).ready(function() {
    

    $('.img-wrap').each(function() {

        fadeImageBlock($(this));

    });


});
    