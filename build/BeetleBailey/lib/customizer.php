<?php
 
add_filter( 'customize_register', 'theme_customizer_register' );

function theme_customizer_register($wp_customize) {

	//Remove certain useless functions for this theme
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section( 'title_tagline' );
    $wp_customize->remove_section( 'custom_css' );

	//Header
	$wp_customize->add_section( 'theme_customizer_logos', array(
		'title' => 'Logos',
		'priority' => 10
	) );

	//stacked logo, present on homepage header
	$wp_customize->add_setting( 'theme_customizer_stacked_logo', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'theme_customizer_stacked_logo', array(
		'label' => 'Stacked logo',
		'section' => 'theme_customizer_logos',
		'settings' => 'theme_customizer_stacked_logo'
	) ) );

	//horizontal logo
	$wp_customize->add_setting( 'theme_customizer_horiz_logo', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'theme_customizer_horiz_logo', array(
		'label' => 'Horizontal logo',
		'section' => 'theme_customizer_logos',
		'settings' => 'theme_customizer_horiz_logo'
	) ) );

	//inverted logo for footer
	$wp_customize->add_setting( 'theme_customizer_inverted_logo', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'theme_customizer_inverted_logo', array(
		'label' => 'Inverted logo',
		'section' => 'theme_customizer_logos',
		'settings' => 'theme_customizer_inverted_logo'
	) ) );


	function sanitize_integer( $input ) {
	    if( is_numeric( $input ) ) {
	        return intval( $input );
	    }
	}
}

// useage:
// get_theme_mod('theme_customizer_logo')