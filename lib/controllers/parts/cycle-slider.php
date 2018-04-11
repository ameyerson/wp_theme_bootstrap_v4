<?php

namespace Controllers\Parts\SectionCycle;

function cycle_slider() {

    $photos = [];

    $photo_objects= get_field('cycle_images');

    if (is_array($photo_objects)) :

        foreach ($photo_objects as $photo) {

            $image_array = wp_get_attachment_image_src($photo['ID'], 'cycle-slider');
            $photos[] = $image_array[0];

        }

    endif;

    return $photos;


}