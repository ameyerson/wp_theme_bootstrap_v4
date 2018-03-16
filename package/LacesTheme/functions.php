
<?php

// * Please note that missing files will produce a fatal error. * //
$theme_includes = [

    'lib/acf_embed.php', //advanced custom fields
    'lib/assets.php', //creates asset paths
    'lib/setup.php', //wordpress setup
    'lib/controllers.php', //page specific    
    'lib/customizer.php', //theme customizer
    'lib/menu-pages/options-social.php', //
    'lib/menu-pages/options-business-info.php', //address, phone, fax, email
    'lib/post-types.php', //address, phone, fax, email
    'lib/remove-emojii.php', // ', //advanced custom fields
    'lib/search-controller.php', //advanced custom fields
    'lib/template-tags.php', //
    'lib/wp_bootstrap_navwalker.php', //nav walker
    'lib/wp_description_walker.php', //nav walker
    'lib/mobile_select_navwalker.php', //nav walker
    'lib/wysiwyg.php', //custom wysiwyg formats

];

foreach ($theme_includes as $file) {

    if (!$filepath = locate_template($file)) {

        trigger_error(sprintf('Error locating %s for inclusion', $file), E_USER_ERROR);

    }

    require_once $filepath;
}
unset($file, $filepath);


function my_acf_admin_head() {
    ?>
    <style type="text/css">

     .acf-range-wrap input[type="number"] {width: 80px !important;}

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');
