<?php get_header(); ?>
<div class="nk-layout">
    <div class="nk-slider" data-active-category="Athletics" data-transition-speed="500" data-transition-effect="fade"
        data-category-transition-speed="500" data-category-transition-effect="top" data-autoplay="false"
        data-force-reload="divide">
        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'athletics' )
                    ),
    
                )
            );
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Athletics" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>
        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'basketball' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Basketball" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'football' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Football" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'netball' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Netball" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>
        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'athletics' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Rugby" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'rugby-league' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Rugby League" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'swimming' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Swimming" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'tag-touch' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Tag Touch" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>

        <?php 
              $args = array(
                'post_type' => 'sport_design',
                'posts_per_page'=> 8,
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'sport',
                        'field' => 'slug',
                        'terms' => array( 'warm-up-top' )
                    ),
    
                )
            );
            
            $loop = new WP_Query($args); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="nk-slider-item" data-categories="Warm up top" data-background-position="100% 100%">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img class="img-fluid mx-auto d-block" src="<?php echo $url ?>" alt="" />
        </div>
        <?php endwhile; ?>
    </div>
    <div class="nk-layout-bottom-right">
        <div class="nk-slider-nav">
            <ul>

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

    </div>
    <div class="nk-layout-top-left">
        <a href="./" class="nk-nav-logo">
            <img src="" alt="" width="133" data-logo-dark="">
        </a>
    </div>

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
<div class="nk-main" id="nk-main" data-transition-speed="500" data-transition-in="bottom" data-transition-out="right">
    <div class="nano">
        <div class="nano-content">
            <div class="nk-vertical-top">
                <div>

                </div>
            </div>
        </div>
    </div>
    <div class="nk-layout">
        <div class="nk-layout-bottom-right-rotated">

        </div>
    </div>
</div>
<div class="nk-main-bg"></div>
<div class="nk-blog" id="nk-blog">
    <?php get_footer(); ?>