<?php get_template_part( 'header', 'top' ); ?> 

	<div id="wrapper">

		<header id="global-navbar">

			<nav>

				<a href="<?php echo get_home_url(); ?>">
					<img src="<?= get_theme_mod('theme_customizer_alt_logo') ?>" alt="<?= get_bloginfo('name') ?>" >
				</a>
				<a href="<?php echo get_home_url(); ?>">
					<h1>Laces of Love</h1>
				</a>
					<hr>
					<h2 class="sub-heading"><span>New Shoes</span><br/>for Needy Kids</h2>

		    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	  	<span class="navbar-toggler-icon"></span>
		    	</button>

			    <?php
	                wp_nav_menu( array(
	                    'theme_location'    => 'primary',
	                    'depth'             => 0,
	                    'container'         => 'div',
	                    'container_class'   => '',
	                    'container_id'      => 'navbarSupportedContent',
	                    'menu_class'        => 'nav navbar-nav',
	                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                    'walker'            => new WP_Bootstrap_Navwalker())
	                );
			    ?>

			    <a class="donate" href="#">
			    	Donate
			    </a>
			</nav>
		</header>
		<main>
