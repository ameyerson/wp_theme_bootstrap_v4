<?php get_template_part( 'header', 'top' ); ?> 

	<div id="wrapper">

		<header id="global-navbar">

			<p class="language-switcher">
				<?php _e('Our site is also available in', 'laces-theme') ?>: <?php do_action('wpml_add_language_selector') ?>
			</p>

			<nav>

				<a href="<?php echo get_home_url(); ?>">
					<img src="<?= get_theme_mod('theme_customizer_logo') ?>" alt="<?= get_bloginfo('name') ?>" class="d-none d-md-inline">
					<img src="<?= get_theme_mod('theme_customizer_alt_logo') ?>" alt="<?= get_bloginfo('name') ?>" class="d-md-none">

				</a>

				<hr>

				<h2 class="sub-heading"><span><?php esc_html_e( 'New Shoes', 'laces-theme' ) ?></span><br/><?php esc_html_e( 'for needy kids', 'laces-theme' ) ?></h2>

		    	<div id="menu-collapse">

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
<!-- 				    	<a href="#"><i class="fa fa-envelope"></i></a> -->
				    
				    </div><!-- <div class="social"> -->
				    

				    <a class="donate" href="#">
				    	Donate
				    </a>

				</div>
				<div class="mobile-select d-md-none">

					<h1 class="site-title">
						Laces of Love
					</h1>

					<select>

						<option value="">Menu</option>

					    <?php
			                wp_nav_menu( 
			                	array(
				                    'theme_location'    => 'primary',
				                    'depth'             => 0,
				                    'container'         => '',
				                    'container_class'   => '',
				                    'container_id'      => '',
				                    'menu_class'        => '',
				                    'walker'            => new Mobile_Select_Navwalker()
			                	)
			                );
					    ?>

				   </select>
			</nav>

		</header>

		<main>
