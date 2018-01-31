<?php get_template_part( 'header', 'top' ); ?> 
	<header id="global-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					<img src="<?= get_theme_mod('theme_customizer_logo') ?>" width="30" height="30" alt="<?= get_bloginfo('name') ?>" >
				</a>
		    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	  	<span class="navbar-toggler-icon"></span>
		    	</button>

			    <?php
	                wp_nav_menu( array(
	                    'theme_location'    => 'primary',
	                    'depth'             => 2,
	                    'container'         => 'div',
	                    'container_class'   => 'collapse navbar-collapse',
	                    'container_id'      => 'navbarSupportedContent',
	                    'menu_class'        => 'nav navbar-nav',
	                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                    'walker'            => new WP_Bootstrap_Navwalker())
	                );
			    ?>
			</div><!-- /.container -->
		</nav>
		<div class="container">
			<?php 
			if (function_exists('bb_breadcrumbs')) {
				bb_breadcrumbs(); 
			}
			?>
		</div>

	</header>
	<main class="global">
