<?php

namespace Controllers\Parts\Banner;

function banner_data($id=false) {

    $banner_data = [];

    if ( ! $id) {
        global $post;
        $id = $post->ID;
    }

    $banner_data['title'] = get_field('page_banner')['text'];

    $image_id = get_field('page_banner')['image'];
    $image_array = wp_get_attachment_image_src($image_id, 'full');
    $banner_data['image'] = $image_array[0];

    return $banner_data;

}