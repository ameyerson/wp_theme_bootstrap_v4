<?php

    get_header(); 
?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('template-parts/hero'); ?>

        <section id="page-content">
            <div class="container">
                <?php the_content() ?>
            </div>
        </section>

        <?php get_footer(); ?>

    <?php endwhile; ?>

<?php endif; ?>