<?php
/**
 * Single post partial template
 *
 * @package design_bank
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <?php the_title( '<h2 class="entry-title">Design Code - #', '</h2>' ); ?>

        <div class="entry-meta">

        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

    <div class="row">
        <div class="col-md-6">
            <div class="hover14 column">
                <figure><?php 
		$image = get_field('front_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></figure>
            </div>
            <h3>Front Side</h3>
        </div>
        <div class="col-md-6">
            <div class="hover14 column">
                <figure><?php 
		$image = get_field('back_side');
		if( !empty( $image ) ): ?>
                    <img class="img-fluid mx-auto d-block" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></figure>
            </div>
            <h3>Back Side</h3>
        </div>
    </div>
    <hr>

    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="entry-content">

        <?php the_content(); ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <h4> Views
            <?php global $post;
				$visitor_count = get_post_meta( $post->ID, '_post_views_count', true);
				if( $visitor_count == '' ){ $visitor_count = 0; }
				if( $visitor_count >= 1000 ){
					$visitor_count = round( ($visitor_count/1000), 2 );
					$visitor_count = $visitor_count.'k';
				}
				echo esc_attr($visitor_count); ?> | By <?php echo date('Y'); ?>
        </h4>
    </footer><!-- .entry-footer -->

</article><!-- #post-## -->