
            <footer id="main-footer" class="full-width section color-white text-center">
                
                <div class="container">
                
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo-white.png" alt="Laces of Love" width=150 />

                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 0,
                            'container'         => 'div',
                            'container_class'   => '',
                            'container_id'      => 'footer-nav',
                            'menu_class'        => 'footer-nav'
                            )
                        );
                    ?>

                </div>

                <p class="small">&copy; <?= date('Y') ?> Laces of Love. | 1900 Gulf Shore Blvd. North, #402 | Naples FL | XXX-XXX-XXXX | <a href="#"><?php _e('Privacy Policy', 'laces-theme') ?></a></p>

            </footer>
        
        </main>
    
    </div><!-- #wrapper -->



    <?php get_template_part( 'footer', 'bottom' ); ?> 