<?php 

/**
 * Template Name: Page Sections
 **/
    

get_header(); ?>

	<section class="main-content">

	    <div class="container">

			<header class="page">

				<h1><?php the_title();?></h1>

			</header>

			<?php if ( have_posts() ) : ?>


				<?php while ( have_posts() ) : the_post(); ?>
					
						<?php the_content(); ?>
						
				<?php endwhile; ?>

			<?php endif; ?>

		</div>

	</section>

<?php get_footer(); ?>