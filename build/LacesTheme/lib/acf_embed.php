<?php

// 1. customize ACF path 
function bb_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
}
add_filter('acf/settings/path', 'bb_acf_settings_path');
 

// 2. customize ACF dir
function bb_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
}
add_filter('acf/settings/dir', 'bb_acf_settings_dir');


// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_true');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );
