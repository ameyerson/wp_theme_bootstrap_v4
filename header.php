<?php get_template_part( 'header', 'top' ); ?> 
	<a name="top" id="top"></a>
	<div id="floating-contact">

		<a href="#"><i class="fa fa-envelope"></i></a>
		
	</div>

	<div id="wrapper">

		<header id="global-navbar" class="clearfix">

			<p class="language-switcher">
				<?php _e('Our site is also available in', 'laces-theme') ?>: <?php do_action('wpml_add_language_selector') ?>
			</p>

			<nav>
				<!-- BRANDING -->
				<a href="<?php echo get_home_url(); ?>">

				<?php if (is_page_template('template-home.php')) : ?>

						<img src="<?= get_theme_mod('theme_customizer_stacked_logo') ?>" alt="<?= get_bloginfo('name') ?>" class="d-none d-md-inline">

						<img src="<?= get_theme_mod('theme_customizer_horiz_logo') ?>" alt="<?= get_bloginfo('name') ?>" class="d-md-none">
					</a>

					<hr class="sidebar-rule">

					<h2><span><?php esc_html_e( 'New Shoes', 'laces-theme' ) ?></span><br/><?php esc_html_e( 'for needy kids', 'laces-theme' ) ?></h2>

					<a class="donate" href="#">
						Donate
					</a>

				<?php else : ?>

						<img src="<?= get_theme_mod('theme_customizer_horiz_logo') ?>" alt="<?= get_bloginfo('name') ?>">

					</a>

				<?php endif; ?>

			    <div class="social">
			    
			    	<a href="#"><i class="fa fa-facebook-official"></i></a>
			    	<a href="#"><i class="fa fa-instagram"></i></a>
				    <a href="#" class="d-md-none"><i class="fa fa-envelope"></i></a>
			    
			    </div><!-- <div class="social"> -->

			    <hr class="top-rule">

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

			    <div class="universal-mobile-nav d-md-none">

			    	<a href="<?= get_theme_mod('donate_link') ?>"" class="mobile-donate" >Donate</a>

					<div class="mobile-select">

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

					</div><!-- <div class="mobile-select"> -->

				</div><!-- <div class="universal-mobile-nav"> -->

			</nav>

		</header>

		<main>
