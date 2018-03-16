<?php

    use Controllers\Parts\Hero;

    $hero_data = Hero\home_hero();

?>

<section class="hero home-hero">

    <div class="container">

        <div class="row block-row">

            <div class="col-sm-6 col-lg-4">

                <div class="item-wrap item-border">
                    
                    <div class="item-content">

                        <div class="inner">
                            
                            <?= $hero_data['text']; ?>

                            <div class="text-center">

                                <a href="#" class="scale-up">

                                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Donate_Heart.png" width=120 height=142/>

                                </a>

                            </div>

                        </div>

                    </div>

                </div><!-- item -->

            </div><!-- col -->

            <div class="col-sm-6 col-lg-4">

                <div class="item-wrap img-wrap fade-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gg.jpg)"></div>
                    
            </div><!-- col -->

            <div class="col-sm-4 d-none d-lg-block">

                <div class="item-wrap img-wrap fade-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ty.jpg)"></div>

            </div><!-- col -->

        </div><!-- row -->

    </div>

    <div class="container">
      
        <h1 class="text-center page-title"><?= $hero_data['title']; ?></h1>

    </div>

    <div class="container d-none d-sm-block">

        <div class="row block-row">

            <div class="col-sm-6">

                <div class="item-wrap img-wrap fade-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wellfitgirls_shoes.jpg)"></div>

            </div><!-- col -->

            <div class="col-sm-6">

                <div id="video-wrapper" class="item-wrap img-wrap fade-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying_poster.png)">

                    <div id="hero-video" class="hidden-xs hidden-sm" 
                        data-mp4 = "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying2.mp4" 
                        data-poster = "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying_poster.png">
                    </div>

                </div>

            </div><!-- col -->

        </div><!-- row -->

    </div>

</section><!-- class="hero" -->