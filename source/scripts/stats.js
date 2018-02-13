$(document).ready(function(e) {

    $total_time = 60;

    $('.counter .data').each(function() { 

        $start = parseInt($(this).attr('data-zero')); console.log($start);
        $end = parseInt($(this).attr('data-max'));

        $increment = Math.ceil(($end - $start) / $total_time); console.log($increment);
        $(this).html(0);

        var x = 60;
        var time = 15;

        for (var i = 0; i < x; i++) {
            setTimeout(increment, i * time, $(this), $increment);
        }

    });

    function increment(object, increment) {

        $current_val = parseInt(object.html());
        $new_val = $current_val + increment;

        object.html($new_val);

        // console.log(object.html);
    }

});