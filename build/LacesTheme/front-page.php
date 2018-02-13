<?php

    get_header(); 
?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php //get_template_part('template-parts/hero'); ?>

        <section class="hero">
            <div class="container">
                <div class="row block-row">

                    <div class="col-sm-8 col-lg-4">

                        <div class="item-wrap item-border double-width">
                            
                            <div class="item-content">

                                <div class="inner">

                                    <p>Over 26,500 kids in Collier County public schools are designated "economically needy."</p>

                                    <p>The children who receive <span class="color-primary">Laces of Love</span> shoes are among these kids.</p>

                                    <div class="text-center d-sm-none d-md-block">
                                        <a href="#">
                                            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Donate_Heart.png" width=120 height=142/>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="item-wrap img-wrap d-sm-none d-md-block" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gg.jpg)"></div>

                        <div class="item-wrap item-border d-none d-sm-block d-md-none">
                          
                            <div class="item-content">

                              <div class="inner">

                                  <div class="text-center">
                                      <a href="#">
                                          <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/Donate_Heart.png" width=120 />
                                      </a>
                                  </div>

                              </div>

                            </div>

                        </div>
                            
                    </div>

                    <div class="col-sm-4 d-none d-lg-block">

                        <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ty.jpg)"></div>

                    </div>
                </div>
            </div>
            <div class="container">
                <h1 class="text-center page-title">Laces of Love has provided over 120,000 pairs <br class="d-none d-sm-block d-xl-none">of new shoes to needy kids in SWFL</h1>
            </div>
            <div class="container d-none d-sm-block">
                <div class="row block-row">

                    <div class="col-sm-6">

                        <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/b.jpg)"></div>

                    </div>

                    <div class="col-sm-6">

                        <div id="video-wrapper">

                            <div id="hero-video" class="hidden-xs hidden-sm" data-mp4 = "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying2.mp4"></div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="main-content">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 offset-sm-2">

                        <div class="text-center pb-md-5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/heart-cion.png" width=60/></div>

                        <p class="lead">

                            The Laces of Love Charitable Foundation, Inc. is a 501-c-3 not-for-profit organization that provides NEW shoes (usually sneakers) to low-income and disadvantaged children in Collier and Lee Counties, Florida, and educates the public about the needs of these children.
                        </p>

                        <p>
                            New sneakers and <a href="#">monetary donations</a> (100% of which are used to purchase shoes unless otherwise designated) are extremely important and gratefully accepted. Laces  also facilitates the donation of cleats and sport shoes to student athletes who, without proper shoes, would not be able to play their sport.
                        </p>

                    </div>

                </div>

            </div>

        </section><!-- class="main-content" -->

        <section class="full-width stats">

            <div class="container">

                <div class="row">

                    <div class="col-md-10 offset-md-1">

                        <div class="row">

                            <div class="col-sm-4 counter">

                                
                                <span class="data" data-zero=0 data-max=17490>17,490</span>

                                <i class="fa fa-heart-o"></i>

                                <p>Kids received new shoes in 2017</p>

                            </div>

                            <div class="col-sm-4 counter">

                                
                                <span class="data" data-zero=0 data-max=60>60</span>

                                <i>%</i>

                                <p>Collier County public school students designated "economically needy"</p>

                            </div>

                            <div class="col-sm-4 counter">

                                
                                <span class="data" data-zero=0 data-max=500>500</span>

                                <i class="fa fa-smile-o"></i>

                                <p>Volunteers</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- class="stats -->

        <section class="main-content">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 offset-sm-2">

                        <div class="text-center pb-md-5""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/heart-cion.png" width=60/></div>

                        <p class="lead">

                            Laces of Love provides only NEW shoes to “Laces” kids since, for many of the children, the Laces of Love shoes are the first pair of NEW shoes the child has ever had.
                        </p>
                        <p>
                             All shoe sizes are needed since Laces distributes shoes to needy kids from toddlers through high school seniors.  Sneakers in adult size 1 – 11 (boys and girls) are especially needed. New shoes for Laces may be dropped off at <a href="https://goo.gl/maps/9q5FxDehrcx" target="_blank">Snyderman’s Shoes of Naples</a> on US 41, at <a href="https://goo.gl/maps/ccBXyqCLitr" target="_blank">St. William Roman Catholic Church</a> at 601 Seagate Drive in Naples, at <a href="https://goo.gl/maps/kjX7QVNqLTq" target="_blank"> the NABOR office</a> at 1455 Pine Ridge Road in Naples, or at <a href="https://goo.gl/maps/qCa7FidTCuv" target="_blank">Best Home Services</a>, …., in Lee County. 
                        </p>
                        <p>
                            Shoes are distributed through Collier and Lee County public schools (c/o guidance counselors and school nurses) and through non-profit organizations that serve needy kids.  The shoes are fitted and given in the privacy of the staff offices. Laces of Love does not give shoes directly to families.  
                        </p>
                        <p>
                            <strong>Laces of Love is 100% volunteer.  There are no paid staff.</strong>
                        </p>

                    </div>

                </div>

            </div>

        </section><!-- class="main-content" -->

        <section class="testimonials p-5">

            <div class="container d-none d-sm-block">

                <div class="row block-row">

                    <div class="col-sm-6">

                        <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bags.jpg)"></div>

                    </div>

                      <div class="col-sm-6">

                          <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/b.jpg)"></div>

                      </div>

                </div>

            </div>

        </section>




<!--                     <div class="col-sm-3">
                        <aside class="stats">



                        </aside>


                    </div> -->
<!--
                    <div class="col-sm-5 col-lg-4 offset-lg-1">
                        <aside>
                            <h4>Educator's Corner</h4>
                            <p>
                                First of all, thank you for connecting needy children to Laces of Love shoes! You are wonderful, and your help is greatly appreciated. We are sure you have a ton of questions.
                            </p>
                            <p>
                                Please click on any of these frequently asked questions below to visit our FAQs page. Or contact us if you can't find the answers you are looking for.
                            </p>

                            <ul>
                                <li><a href="#">How do we get a supply of Back to School Shoes?</a></li>
                                <li><a href="#">How do I figure out what size to request?</a></li>
                                <li><a href="#">What if I need more shoes?</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
-->


        <?php get_footer(); ?>

    <?php endwhile; ?>

<?php endif; ?>