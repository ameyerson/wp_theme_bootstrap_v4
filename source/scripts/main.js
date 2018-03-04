// Begin main.js
// ===================================
'use strict';

$(document).ready(function() {
    
    console.log('hello world');

    $(".mobile-select select").change(function() {

        window.location = "/?page_id=" + $(this).find("option:selected").val();

    });

});