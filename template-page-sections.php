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

    <!-- In-page Navigation -->
    <?php

        $sectionArgs = array(

            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'child_of' => get_the_ID()

        );

        $sectionList = get_pages($sectionArgs);

        if (count($sectionList) > 0) :

            echo '<ul class="page-nav">';

            foreach ($sectionList as $section) {

               echo '<li><a href="#' . $section->post_name . '">' . $section->post_title . '</a></li>';

            }

            echo '</ul>';

    ?>

	<!-- Pull Child Page content -->

    <?php

            foreach ($sectionList as $section) { ?>

                <section class="page-section full-width" id="<?php echo $section->post_name ?>">

                    <div class="container">

                        <div class="row">

                            <h2 class="section-title"><?php echo $section->post_title; ?></h2>

                            <?php echo apply_filters( 'the_content', $section->post_content); ?>

                        </div>

                    </div>

                </section>

            <?php }

        endif; //(count($sectionList) > 0)

    ?>


<?php get_footer(); ?>