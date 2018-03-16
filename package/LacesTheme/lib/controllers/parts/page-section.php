<?php

namespace Controllers\Parts\PageSection;

function page_section() {

    $section_data = [];

    switch (get_field('section_column_width')) {
        case 5:
            $section_data['section_class'] = "col-md-5";
            $section_data['sidebar_class'] = "col-lg-5 offset-lg-2 col-md-6 offset-md-1";
            break;
        case 6:
            $section_data['section_class'] = "col-md-6";
            $section_data['sidebar_class'] = "col-lg-5 offset-lg-1 col-md-6";
            break;
        case 7:
            $section_data['section_class'] = "col-md-7";
            $section_data['sidebar_class'] = "col-lg-4 offset-lg-1 col-md-5";
            break;
        case 8:
            $section_data['section_class'] = "col-md-8";
            $section_data['sidebar_class'] = "col-lg-3 offset-lg-1 col-md-4";
            break;
        case 9:
            $section_data['section_class'] = "col-xxl-9 col-xl-10 col-lg-11";
            $section_data['sidebar_class'] = "d-none";
            break;
        case 10:
            $section_data['section_class'] = "col-xl-10 col-lg-11";
            $section_data['sidebar_class'] = "d-none";
            break;
        case 11:
            $section_data['section_class'] = "col-lg-11";
            $section_data['sidebar_class'] = "d-none";
            break;
        default:
            $section_data['section_class'] = "col-sm-12";
            $section_data['sidebar_class'] = "d-none";
            break;


    }

    $photos = get_field('section_photos');

    if($photos) :

        $section_data['section_photos'] = [];

        foreach ($photos as $photo) :

            $image_array = wp_get_attachment_image_src($photo['section_photo'], 'full'); 
            $aspect_ratio = $photo['section_photo_ratio'] * 100;

            $section_data['section_photos'][] = array(
                'url' => $image_array[0],
                'aspect_ratio' => $aspect_ratio
            );

        endforeach;

        $section_data['photo_height'] = 100 / count($photos) . '%';

    endif;

    return $section_data;

}

function section_sidebar() {


    $sidebar_data = []; 

    if (get_field('section_sidebar')['sidebar_include']) :

        return get_field('section_sidebar')['sidebar_content'];

    else :

        return false;

    endif;

}