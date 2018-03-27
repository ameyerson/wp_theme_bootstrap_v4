<?php

    use Controllers\Parts\PageSection;

    $section_data = PageSection\page_section();
    $sidebar_content = PageSection\section_sidebar();

// var_dump($section_data);

?>


<section class="page-section <?= $section_data['background_class']; ?>" id="<?php echo $post->post_name ?>">

    <?php if ($section_data['upper_border']) echo '<hr class="hr-wide">'; ?>

    <div class="container">

        <div class="row">

            <div class="<?= $section_data['section_class']; ?>">

                <?php the_content() ?>

            </div>

            <div class="<?= $section_data['sidebar_class']; ?> block-row sidebar-block">

            <?php if ($sidebar_content) : ?>

                <div class="section-sidebar">

                    <?= $sidebar_content ?>

                </div>
                <?php  if ($section_data['section_photos']) : foreach($section_data['section_photos'] as $photo) : ?>

                    <div class="img-wrap">

                        <div class="item-wrap in-sidebar fade-image shadow-image shadow-secondary" style="background-image: url(<?= $photo['url'] ?>); padding-top: <?= $photo['aspect_ratio']; ?>%"></div>
                    </div>

                <?php endforeach; endif; //photos in sidebar

            else : //no sidebar

            if ($section_data['section_photos']) : foreach($section_data['section_photos'] as $photo) : ?>

                <div class="row-centerer" style="height: <?= $section_data['photo_height']; ?>">

                    <div class="img-wrap <?php if ($photo['has_caption']) echo 'with-caption' ?>">

                        <div class="item-wrap fade-image shadow-image shadow-tertiary" style="background-image: url(<?= $photo['url'] ?>); padding-top: <?= $photo['aspect_ratio']; ?>%"></div>
                    
                        <?php if ($photo['has_caption']) : ?>

                            <div class="photo-caption">

                                <?= $photo['caption']; ?>

                            </div>

                        <?php endif; ?>
                    </div>

                </div>

            <?php endforeach; endif; //photos 

            endif; //if ($sidebar_content) ?>

            </div>

        </div>

    </div>

</section>