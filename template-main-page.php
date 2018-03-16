<?php 

/**
 * Template Name: Main Page
 **/

use Controllers\Parts\Banner;

$banner_data = Banner\banner_data();
    

get_header(); ?>

    <section class="banner full-width">

        <div class="img-wrap fade-image" style="background-image: url(<?= $banner_data['image']; ?>"></div>

        <div class="banner-overlay fade-overlay"></div>  

        <p class="banner-title"><?= $banner_data['title']; ?></p>

    </section>

    <nav class="in-page full-width">
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

                    // $display = explode(' ', $section->post_title);
                    // $display = array_map('trim', $display);
                    $display = str_replace(' ', '&nbsp;', $section->post_title);
                    // $display = implode('&nbsp;', $display);

                   echo '<li><a href="#' . $section->post_name . '" class="scroll-to-link">' . $display . '</a></li>';

                }

                echo '<li id="to-top"><a href="#top" class="scroll-to-link"></i>Top</a></li>';

                echo '</ul>';

        ?>
    </nav>

	<div id="page-wrapper">

        <section class="page-lead lead">

    	    <div class="container">

                <div class="row">

                    <div class="col-md-10 offset-md-1">

            			<?php if ( have_posts() ) : ?>


            				<?php while ( have_posts() ) : the_post(); ?>
            					
            						<?php the_content(); ?>
            						
            				<?php endwhile; ?>

            			<?php endif; ?>
                    </div>

                </div>

    		</div>

	   </section>

	<!-- Pull Child Page content -->

    <?php

            global $post;

            foreach ($sectionList as $section) {

                $post = $section;

                setup_postdata($post);
            
                get_template_part('template-parts/page-section'); ?>


            <?php }

            wp_reset_postdata();

        endif; //(count($sectionList) > 0)

    ?>

</div>

<?php get_footer(); ?>