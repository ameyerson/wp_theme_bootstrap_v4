// ===================================
// Begin scrollto.js
// ===================================
'use strict';

$(document).ready(function() {

    $('.wpcf7-form  .form-group input, .wpcf7-form .form-group textarea').focusout(function() {

        var inputContent = $(this).val();

        if ( inputContent !== '' ) {
            $(this).addClass('has-content');
        } else {
            $(this).removeClass('has-content');
        }

    });

});

$(window).on('load', function() {

    $('.wpcf7-form  .form-group input, .wpcf7-form .form-group textarea').each(function() {
        $(this).focusout();
    });

});