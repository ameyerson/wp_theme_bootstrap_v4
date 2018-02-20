<?php

    get_header(); 
?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php //get_template_part('template-parts/hero'); ?>

        <section class="hero">

            <div class="container">

                <div class="row block-row">

                    <div class="col-sm-6 col-lg-4">

                        <div class="item-wrap item-border">
                            
                            <div class="item-content">

                                <div class="inner">

                                    <p>Over 26,500 kids in Collier County public schools are designated "economically needy."</p>

                                    <p>The children who receive <span class="color-primary">Laces of Love</span> shoes are among these kids.</p>

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

                        <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gg.jpg)"></div>
                            
                    </div><!-- col -->

                    <div class="col-sm-4 d-none d-lg-block">

                        <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ty.jpg)"></div>

                    </div><!-- col -->

                </div><!-- row -->

            </div>

            <div class="container">

                <h1 class="text-center page-title">Laces of Love has provided over 120,000 pairs <br class="d-none d-sm-block d-xl-none">of new shoes to needy kids in SWFL</h1>

            </div>

            <div class="container d-none d-sm-block">

                <div class="row block-row">

                    <div class="col-sm-6">

                        <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/b.jpg)"></div>

                    </div><!-- col -->

                    <div class="col-sm-6">

                        <div id="video-wrapper" class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying_poster.png)">

                            <div id="hero-video" class="hidden-xs hidden-sm" 
                                data-mp4 = "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying2.mp4" 
                                data-poster = "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tying_poster.png">
                            </div>

                        </div>

                    </div><!-- col -->

                </div><!-- row -->

            </div>

        </section><!-- class="hero" -->

        <section class="main-content">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">

                        <div class="text-center pb-4 pb-sm-5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/heart-cion.png" width=60/></div>

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

                    <div class="col-lg-10 offset-lg-1">

                        <div class="row">

                            <div class="col-sm-4 counter ready">
                                
                                <span class="data ready" data-zero=0 data-max=17490>17,490</span>

                                <p>Kids received new shoes<br/>in 2017</p>

                            </div>

                            <div class="col-sm-4 counter ready">
                                
                                <span class="data ready" data-zero=0 data-max=60>60</span>

                                <i>%</i>

                                <p>Collier County public school<br/>students designated<br/>"economically needy"</p>

                            </div>

                            <div class="col-sm-4 counter">
                                
                                <span class="data ready" data-zero=0 data-max=500>500</span>

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

                    <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">

                        <div class="text-center pb-4 pb-sm-5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/heart-cion.png" width=60/></div>

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
                        <p class="video-cta">

<!--                             <div class="display-5 primary"><a href="#"><i class="fa fa-film"></i>Learn More About Us...</a></div> -->

                        </p>

                    </div>

                </div>

            </div>

        </section><!-- class="main-content" -->


        <section class="difference full-width cta-block" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/assets/img/tryline.jpg)">   

            <div class="difference-overlay"></div>  

            <div class="difference-content"> 

                <header class="section-header container-fluid">
            
                    <div class="h1 section-title color-white">You Can Make a Difference</div>

                    <div class="h2 section-sub-title color-white">in a child's life</div>

                    <hr class="section-title"/>

                </header><!-- class="section-header" -->

                <div class="container ctas">

                    <div class="row">

                        <div class="col-lg-4 cta">

                            <a href="#" title="Donate">

                                <div class="description">       

                                    <div class="primary icon-donate">

                                        <h3>Donate Funds</h3>

                                        <p>To purchase new shoes for a needy child.</p>

                                    </div>  

                                </div>  
                            </a>
                        </div>


                        <div class="col-lg-4 cta">

                            <a href="#" title="Donate Shoes">

                                <div class="description">   

                                    <div class="white icon-donate">

                                        <h3>Donate a pair</h3>

                                        <p>Or 2, of new sneakers.</p>

                                    </div>  

                                </div>  

                            </a>

                        </div>

                        <div class="col-lg-4 cta">

                            <a href="#" title="Shoe Party">

                                <div class="description">      

                                    <div class="secondary icon-donate">

                                        <h3>Give a Shoe Party</h3>

                                        <p>Or hold a Shoe Drive.<br/>Invite your friends!</p>

                                    </div>  

                                </div>  

                            </a>

                        </div>

                    </div><!-- class="row" -->

                </div><!-- class="container ctas" -->

            </div><!-- class="difference-content" -->

        </section><!-- <section class="difference full-width"> -->

        <section class="testimonials action-blocks">

                <div class="block-row">

                    <div class="row action-tile tile-left">

                        <div class="action-section-left col-sm-6">

                            <div class="item-wrap img-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pile.jpg)"></div>

                            <div class="action-content" data-target="#where">

                                <h3>Where do our shoes go?</h3>
                                <hr class="section-title">


                            </div>

                        </div>

                        <div class="action-details col-sm-6 action-rightside" id="story">

                            <p>We recently received this letter from a mother who really needed Laces support.</p>


                        </div><!-- class="action-details" -->

                    </div><!-- <div class="action-tile"> -->


                    <div class="row action-tile tile-right">

                        <div class="action-details col-sm-6" id="where">

                            <p>Did you ever wonder where all our shoes go?  With so many children in need, Laces of Love has partnered with a long list of organizations to ensure the kids who need our shoes get them.  We couldn’t reach them with out the help of the following organizations.</p>
                            <p>Laces of Love has partnered for MANY years with the following organizations:</p>


                        </div><!-- class="action-details" -->

                        <div class="action-section-right col-sm-6">

                            <div class="item-wrap img-wrap " style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pile.jpg)"></div>

                            <div class="action-content" data-target="#story">

                                <h3>Helping a Mother in Need</h3>
                                <hr class="section-title">

                            </div>

                        </div><!-- class="action-content" -->
                    
                    </div><!-- <div class="action-tile"> -->


            </div><!-- class="action-wrapper" -->

        </section><!-- <section class="testimonials"> -->

        <?php get_footer(); ?>

    <?php endwhile; ?>

<?php endif; ?>