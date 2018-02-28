<?php

namespace Controllers\Parts\Hero;

function home_hero($id=false) {

    $hero_data = [];

    if ( ! $id) {
        global $post;
        $id = $post->ID;
    }

    $hero_data['title'] = get_field('hero_title');
    $hero_data['text'] = get_field('hero_text');

    return $hero_data;

}