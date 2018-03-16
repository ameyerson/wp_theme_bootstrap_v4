<?php
/**
 * Template Name: Home
 **/


    get_header(); 
?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('template-parts/hero'); ?>

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


        <section class="difference full-width cta-block dark-section" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/assets/img/tryline.jpg)">   

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

        <section class="testimonials">

            <div class="container">

                <header class="section-header">
                
                    <div class="h2 section-sub-title color-black">Helping a Mother in Need</div>

                    <hr class="section-title"/>

                </header><!-- class="section-header" -->

                <div class="row">
                    
                    <div class="cl-lg-11 col-xxl-10 offset-xxl-1">
                        
                        <p class="mb-5">We recently received this letter from a mother who really needed Laces support.</p>
                    
                    </div>

                    <div class="col-lg-11 col-xxl-10 offset-xxl-1">

                        <blockquote>

                            <p>As a working mother, I have always taken comfort in the fact that I can provide for my children. I am usually the one donating my time and money to organizations that help others.  So it was very hard for me to admit that I needed help when things got rough. At a point in my life where we were struggling to even feed our kids or keep gas in the car, it broke my heart when my son came to me telling me his shoes hurt – they were too small and falling apart. They were the only ones he had. </p>

                            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/newshoes.png" width=200 />

                            <p>What do I do? I desperately needed to get my son new sneakers.  I needed help. Thank you Laces of Love for getting my son new shoes. He was overjoyed and even thinks they hold special powers to make him run faster. Maybe they do – anything is possible with love.  You helped make this hard time a little less difficult and I will forever be grateful.</p>                           

                        </blockquote>

                    </div>

                </div><!-- <div class="row"> -->

            </div>

        </section><!-- <section class="testimonials"> -->


        <section class="donations full-width">

                <div class="row align-items-center collage-row">

                    <div class="col-lg-6 donation-content">

                        <div class="donation-title h1">Thank You!</div>

                        <p>Thank you for taking the time to learn more about Laces of Love and our mission of making sure no child *this should be somewhat different from above*. With your help, we can continue to eleifend nulla eu nibh accumsan, a malesuada odio euismod.</p>
                        <p>To find out more about <a href="#">where our shoes go</a>, please visit our <a href="#">What We Do</a> page.</p>

                        <p class="small mt-4">Laces of Love is a US tax-exempt 501(c)(3) non-profit organization (Tax ID Number: #####). Your gift is tax-deductible as allowed by law.</p>
                        <p class="small"><a href="#">Click here for our 2016 annual report.</a></p>

                    </div>

                    <div class="col-lg-6 collage-wrapper">

                        <div class="collage" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/assets/img/collage.png)"></div>

                    </div>

                </div>

        </section><!-- <section class="donations"> -->

        <?php get_footer(); ?>

    <?php endwhile; ?>

<?php endif; ?>