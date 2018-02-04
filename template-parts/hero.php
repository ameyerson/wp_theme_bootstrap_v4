<?php

    use Controllers\Parts\Hero;
    use Controllers\Parts\title;

    $hero_data = Hero\home_hero();
    $hero_title = Title\hero_title();

?>

<section class="hero">
    <div class="hero-background image" style="background-image: url(<?php echo $hero_data['image_url'] ?>)">

        <?php if ($hero_data['video_datastring']) { ?>
            <div id="hero-video" class="hidden-xs hidden-sm" <?php echo $hero_data['video_datastring'] ?>></div>
        <?php } ?>

        <div class="hero-overlay" style="background: <?php echo $hero_data['css'] ?>"></div>

        <div class="hero-meta text-center">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 offset-lg-3">

                        <h1><?= $hero_title['title'] ?></h1>
                        <h2><?= $hero_title['subtitle'] ?></h2>
                        <p><?= $hero_title['text'] ?></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <a class="scroll-down-indicator visible-lg" href="#home-content"></a>

</section>