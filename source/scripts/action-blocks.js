// ===================================
// Begin action-blocks.js
// ===================================
'use strict';

$(document).ready(function() {
    
    $('.action-content').click(function(e) {

        var target = $(this).attr('data-target');

        e.preventDefault();

        $(target).toggleClass('open');

        return false;
    });

});
    