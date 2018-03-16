
            <footer id="main-footer" class="full-width text-center">

                <header class="section-header container-fluid">
                
                    <div class="h2 section-sub-title color-black">Find out how you can...</div>

                    <hr class="section-title"/>

                </header><!-- class="section-header" -->
                
                <div class="container clearfix">
                    
                    <div class="row">
                        <?php
                            // wp_nav_menu( array(
                            //     'theme_location'    => 'footer',
                            //     'depth'             => 0,
                            //     'container'         => 'div',
                            //     'container_class'   => '',
                            //     'container_id'      => 'footer-nav',
                            //     'menu_class'        => 'footer-nav'
                            //     )
                            // );

                            wp_nav_menu(
                                array (
                                    'theme_location'    => 'footer',
                                    'depth'             => 0,
                                    'container'         => 'div',
                                    'container_class'   => '',
                                    'container_id'      => 'footer-nav',
                                    'menu_class'        => 'footer-nav',
                                    'walker'          => new Description_Walker
                                )
                            );
                        ?>

                    </div>
                </div>

                <div class="bg-dark text-center colophon">

                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo-white.png" alt="Laces of Love" width=150 />

                    <p class="small">&copy; <?= date('Y') ?> Laces of Love. | 1900 Gulf Shore Blvd. North, #402 | Naples FL   <a href="#"><?php _e('Privacy Policy', 'laces-theme') ?></a></p>

                </div>

            </footer>
        
        </main>
    
    </div><!-- #wrapper -->



    <?php get_template_part( 'footer', 'bottom' ); ?> 