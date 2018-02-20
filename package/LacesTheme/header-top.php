<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <title><?php bloginfo() ?><?php wp_title( '-' ); ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	    <!-- icon -->
	    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico?v=XBzAQQbp68" type="image/x-icon">
	    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico?v=XBzAQQbp68" type="image/x-icon">

<!--         <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cabin+Sketch|Roboto" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Cabin+Sketch:700|Quattrocento|Quattrocento+Sans|Raleway" rel="stylesheet">

	    <?php wp_head(); ?>

        <script>
          videojs.options.flash.swf = "<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libraries/video-js.swf"
        </script>

	</head>

<body <?php body_class(); ?>>