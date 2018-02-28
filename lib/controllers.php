<?php
/**
 * Load controllers
 *
 * Please note that missing files will produce a fatal error.
 */
$controllers = [
    'lib/controllers/parts/hero.php', // hero data
    'lib/controllers/parts/title.php', // hero title
];

foreach ( $controllers as $controller ) {
    if ( ! $filepath = locate_template( $controller ) ) {
        trigger_error( sprintf( 'Error locating controller %s for inclusion', $controller ), E_USER_ERROR );
    }

    require_once $filepath;
}
unset( $controller, $filepath );
