<?php
/**
 * The template for displaying all single posts
 *
 * @package design_bank
 */

// Exit if accessed directly.


get_header();
?>
<div id="singel_design">
<div class="container">
    <div class="row">
        <div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>
 
            <?php get_template_part( 'loop-templates/content', 'single-sport_design' ); ?>


            <?php endwhile; // end of the loop. ?>

        </div>
    </div>
</div>
</div>


<?php get_footer();