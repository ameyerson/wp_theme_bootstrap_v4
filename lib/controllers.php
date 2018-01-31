<?php
/**
 * Load controllers
 *
 * Please note that missing files will produce a fatal error.
 */
$controllers = [
    'lib/controllers/homepage/hero.php', // home hero data
    'lib/controllers/homepage/title.php', // home hero title
];

foreach ( $controllers as $controller ) {
    if ( ! $filepath = locate_template( $controller ) ) {
        trigger_error( sprintf( __( 'Error locating controller %s for inclusion', 'bb_thmem' ), $controller ), E_USER_ERROR );
    }

    require_once $filepath;
}
unset( $controller, $filepath );
