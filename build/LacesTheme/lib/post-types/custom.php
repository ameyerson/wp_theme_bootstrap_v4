<?php

register_post_type('custom-posts', array(
    'label' => __('Custom Posts'),
    'labels' => array ('name' => 'Custom Posts', 
        'singular_name' => 'Custom Post',
        'add_new_item' => 'Add New Custom Post',
        'edit_item' => 'Edit Custom Post',
        'new_item' => 'New Custom Post',
        'view_item' => 'View Custom Post'),
    'public' => true,
    'menu_position' => 5,
    'rewrite' => array('slug' => 'custom-post'),
    'has_archive' => true,
    'menu_icon' => 'dashicons-carrot',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'comments', 'page-attributes', 'excerpt' )

));