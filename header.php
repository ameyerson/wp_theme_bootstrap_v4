<?php get_template_part( 'header', 'top' ); ?> 

	<div id="wrapper">

		<header id="global-navbar">

			<p class="language-switcher">
				<?php _e('Our site is also available in', 'laces-theme') ?>: <?php do_action('wpml_add_language_selector') ?>
			</p>

			<nav>

				<a href="<?php echo get_home_url(); ?>">
					<img src="<?= get_theme_mod('theme_customizer_alt_logo') ?>" alt="<?= get_bloginfo('name') ?>" >
				</a>

				<!-- text title -->
				<h1 class="text-hide">Laces of Love</h1>

				<hr>

				<h2 class="sub-heading"><span><?php esc_html_e( 'New Shoes', 'laces-theme' ) ?></span><br/><?php esc_html_e( 'for needy kids', 'laces-theme' ) ?></h2>

		    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	  	<span class="navbar-toggler-icon"></span>
		    	</button>

			    <?php
	                wp_nav_menu( 
	                	array(
		                    'theme_location'    => 'primary',
		                    'depth'             => 0,
		                    'container'         => 'div',
		                    'container_class'   => '',
		                    'container_id'      => 'navbarSupportedContent',
		                    'menu_class'        => 'nav navbar-nav',
		                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                    'walker'            => new WP_Bootstrap_Navwalker()
	                	)
	                );
			    ?>


			    <div class="social">
			    
			    	<a href="#"><i class="fa fa-facebook-official"></i></a>
			    	<a href="#"><i class="fa fa-instagram"></i></a>
			    	<a href="#"><i class="fa fa-envelope"></i></a>
			    
			    </div><!-- <div class="social"> -->
			    

			    <a class="donate" href="#">
			    	Donate
			    </a>
			</nav>
		</header>
		<main>
