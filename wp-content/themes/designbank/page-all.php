<?php
/**
 * Template Name: All Design
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package design_bank
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'design_bank_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

		<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
    <?php
        if( $terms = get_terms( 'sport_type', 'orderby=name' ) ) : 
            echo '<select name="categoryfilter"><option>Select category...</option>';
            foreach ( $terms as $term ) :
                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; 
            endforeach;
            echo '</select>';
        endif;
    ?>
	 <?php
        if( $terms = get_terms( 'design_type', 'orderby=name' ) ) : 
            echo '<select name="designfilter"><option>Select category...</option>';
            foreach ( $terms as $term ) :
                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; 
            endforeach;
            echo '</select>';
        endif;
    ?>
  
    <button>Apply filters</button>
    <input type="hidden" name="action" value="customfilter">
</form>
<div id="response"></div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();