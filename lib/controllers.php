<?php
/**
 * Load controllers
 *
 * Please note that missing files will produce a fatal error.
 */
$controllers = [
    'lib/controllers/parts/hero.php', // hero data
    'lib/controllers/parts/title.php', // hero title
    'lib/controllers/parts/cycle-slider.php', // cycle slider
];

foreach ( $controllers as $controller ) {
    if ( ! $filepath = locate_template( $controller ) ) {
        trigger_error( sprintf( __( 'Error locating controller %s for inclusion', 'bb_theme' ), $controller ), E_USER_ERROR );
    }

    require_once $filepath;
}
unset( $controller, $filepath );
