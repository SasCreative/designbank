<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="_nK">
    <title>Umbrella. | Studio</title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/vender/umbrella/images/favicon.jpg">

    <!-- START: Styles -->

    
    <!-- Bootstrap Custom -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/umbrella/css/bootstrap-custom.min.css">

    <!-- Umbrella -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/umbrella/css/umbrella.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/umbrella/css/custom.css">

   

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/jquery/dist/jquery.min.js"></script>

</head>



<body>

    <!--
        START: Fixed Layout

        Contains fixed page elements like slider, navigation, logo
    -->
    <div class="nk-layout">
        <!--
            Slider

            Additional Classes:
                .nk-slider-hide-titles - hide titles after slide

            Additional Classes Per Slide:
                .active - active slide on startup

            Additional Attributes:
                data-active-category - current active category
                data-autoplay - autoplay delay in milliseconds
                data-transition-speed - transition speed in milliseconds
                data-transition-effect - transition effect for slides. Available effects: fade, divide, top, left, right, bottom
                data-category-transition-speed - transition speed in milliseconds after category change
                data-category-transition-effect - transition effect for slides after category change
                data-force-reload - reload slider on ajax page request. Required values like in data-transition-effect attribute.

            Additional Attributes Per Slide:
                data-categories - list with categories
                data-background-position - position for slide image. By default "40% 50%"

            Notes:
                If you want add more then 1 category per slide, type it with | divider.
                Example: data-categories="Fashion|Portraits|Nature"

                If you want to add slide in all categories, use *
                Example: data-categories="*"
        -->

        <div class="nk-slider" data-active-category="Athletics" data-transition-speed="500" data-transition-effect="fade" data-category-transition-speed="500" data-category-transition-effect="top" data-autoplay="false" data-force-reload="divide">
           
        
        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'athletics' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item active" data-categories="Athletics" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'basketball' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Basketball" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>


        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'football' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Football" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>



        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'netball' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Netball" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>




        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'rugby' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Rugby" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>


        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'rugby-league' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Rugby League" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'swimming' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Swimming" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>



        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'tag-touch' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Tag Touch" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>


        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport_type',
                        'field' => 'slug',
                        'terms' => array( 'warm-up-top' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Warm up top" data-background-position="40% 50%">
        <?php 
		$image = get_field('index_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
        </div>
        <?php endwhile; ?>




        </div>


        <!-- Top Center -->
        <div class="nk-layout-top-center">
            <nav class="nk-nav">
                <ul class="nk-slider-categories">
                    <!-- Here will be inserted available slider categories -->
                </ul>
            </nav>
        </div>

        <!-- Bottom Right -->
        <div class="nk-layout-bottom-right">
            <!--
                START: Slider Navigation

                Additional Classes:
                    .nk-slider-nav-slim
            -->
            <div class="nk-slider-nav">
                <ul>
                    <!-- Here will be inserted slider bullets -->
                </ul>
                <div>
                    <div class="nk-slider-nav-prev">
                        <span class="nk-icon-arrow-up"></span>
                    </div>
                    <div class="nk-slider-nav-next">
                        <span class="nk-icon-arrow-down"></span>
                    </div>
                </div>
            </div>
            <!-- END: Slider Navigation -->
        </div>

        <!-- Top Left -->
        <div class="nk-layout-top-left">

            <a href="./" class="nk-nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/images/logo.png" alt="" width="133" data-logo-dark="<?php echo get_template_directory_uri(); ?>/vender/umbrella/images/logo-dark.png">
            </a>


            <!-- There will be inserted loading spinner when ajax -->
            <!-- <div class="nk-loading-spinner-place"></div> -->
        </div>

    
      

    

        <!-- Bottom Center -->
        <div class="nk-layout-bottom-center">
        <nav class="nk-nav">
            <ul>
                <li>
                    <a href="http://designsbank.co.nz/sport/athletics/">View More</a>
                </li>
            </ul>
        </nav>
    </div>

      
    </div>
    <!-- END: Fixed Layout -->



   



    <!--
        START: Main Page Content

        Additional Classes:
            .active
            .nk-main-lower-title - title will be visible under content text

        Additional Attributes:
            data-transition-speed - transition speed in milliseconds
            data-transition-in - top, bottom, right. Show transition type
            data-transition-out - top, bottom, right. Hide transition type

        Note:
            If you don't want to show content, just remove all content inside .nano-content and inside .nk-layout and remove .active class, but don't remove this block completely
    -->
    <div class="nk-main" id="nk-main" data-transition-speed="500" data-transition-in="bottom" data-transition-out="right">
        <div class="nano">
            <div class="nano-content">
                <div class="nk-vertical-top">
                    <div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Right Info -->
        <div class="nk-layout">
            <div class="nk-layout-bottom-right-rotated">

            </div>
        </div>
    </div>
    <div class="nk-main-bg"></div>
    <!-- END: Main Page Content -->

    <!--
        START: Blog

        Additional Classes:
            .active

        Note:
            If you don't want to show blog, just remove all content inside and remove .active class, but don't remove this block completely
    -->
    <div class="nk-blog" id="nk-blog">

    </div>
    <!-- END: Blog -->




    <!-- START: Scripts -->

    <!-- GSAP -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/gsap/src/minified/TweenMax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

    <!-- History.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/history.js/scripts/bundled/html4%2Bhtml5/jquery.history.js"></script>

    <!-- Bootstrap Custom -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/js/bootstrap-custom.min.js"></script>

    <!-- Jquery Form -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/jquery-form/jquery.form.js"></script>

    <!-- Jquery Validation -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Hammer.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/hammer.js/hammer.min.js"></script>

    <!-- NanoSroller -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- Background Check Custom -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/plugins/background-check/background-check.min.js"></script>

    <!-- Jarallax Video -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/bower_components/jarallax/dist/jarallax-video.min.js"></script>

    <!-- Umbrella -->
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/js/umbrella.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/js/custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vender/umbrella/js/umbrella-init.js"></script>
    <!-- END: Scripts -->



</body>

</html>