<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package design_bank
 */

// Exit if accessed directly.
get_header();
?>
<div id="sport_section">
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : ?>
                    <?php do_action('show_beautiful_filters'); ?>
				
                <?php /* Start the Loop */ ?>
                <ul class="list-inline sport_tag">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'loop-templates/content', 'sport_design' ); ?>
                    <?php endwhile; ?>
                </ul>
                <?php else : ?>
                <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <!-- The pagination component -->
                <?php design_bank_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); 