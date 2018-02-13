'use strict';

$(document).ready(function() {

    var $totalTime = 60,
        $start,
        $end,
        $increment;

    $('.counter .data').each(function() { 

        $start = parseInt($(this).attr('data-zero')); console.log($start);
        $end = parseInt($(this).attr('data-max'));

        $increment = Math.ceil(($end - $start) / $totalTime); console.log($increment);
        $(this).html(0);

        var x = 60;
        var time = 15;

        for (var i = 0; i < x; i++) {
            setTimeout(increment, i * time, $(this), $increment);
        }

    });

    function increment(object, increment) {

        var $currentVal = parseInt(object.html());
        var $newVal = $currentVal + increment;

        object.html($newVal);

        // console.log(object.html);
    }

});