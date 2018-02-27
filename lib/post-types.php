<?php
/**
 * Load post types
 *
 * Please note that missing files will produce a fatal error.
 */
$post_types = [
    'lib/post-types/custom.php', // demo post type
];

foreach ( $post_types as $post_type ) {
    if ( ! $filepath = locate_template( $post_type ) ) {
        trigger_error( sprintf('Error locating controller %s for inclusion', $controller ), E_USER_ERROR );
    }

    require_once $filepath;
}
unset( $post_type, $filepath );
