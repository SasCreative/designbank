<?php
/**
 * design_bank functions and definitions
 *
 * @package design_bank
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$design_bank_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/design_bank/design_bank/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $design_bank_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}


function cptui_register_my_cpts_sport_design() {

	/**
	 * Post Type: Sport Design .
	 */

	$labels = [
		"name" => __( "Sport Design ", "design_bank" ),
		"singular_name" => __( "Sport Design ", "design_bank" ),
		"menu_name" => __( "Sport Design", "design_bank" ),
		"all_items" => __( "All Designs", "design_bank" ),
		"add_new" => __( "Add New Design", "design_bank" ),
		"add_new_item" => __( "Add New Design", "design_bank" ),
		"edit_item" => __( "Edit Design", "design_bank" ),
		"new_item" => __( "New Design", "design_bank" ),
		"view_item" => __( "View Design", "design_bank" ),
		"view_items" => __( "View Designs", "design_bank" ),
		"search_items" => __( "Search Design", "design_bank" ),
		"not_found" => __( "No Design Found", "design_bank" ),
		"not_found_in_trash" => __( "No Design Found in Trash", "design_bank" ),
		"parent" => __( "Parent Design ", "design_bank" ),
		"archives" => __( "Design", "design_bank" ),
		"insert_into_item" => __( "Insert into Design", "design_bank" ),
		"uploaded_to_this_item" => __( "Uploaded to this Design", "design_bank" ),
		"filter_items_list" => __( "Filter Design List", "design_bank" ),
		"items_list_navigation" => __( "Design List Navigation", "design_bank" ),
		"items_list" => __( "Items List", "design_bank" ),
		"attributes" => __( "Design Attributes", "design_bank" ),
		"name_admin_bar" => __( "Design", "design_bank" ),
		"item_published" => __( "Design Published", "design_bank" ),
		"item_updated" => __( "Design Updated", "design_bank" ),
		"parent_item_colon" => __( "Parent Design", "design_bank" ),
	];

	$args = [
		"label" => __( "Sport Design ", "design_bank" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"supports" => array( 'title', 'editor', 'thumbnail' ),
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "sport", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-appearance",
	];

	register_post_type( "sport_design", $args );
}

add_action( 'init', 'cptui_register_my_cpts_sport_design' );




function rm_post_view_count(){
	if ( is_single() ){
		global $post;
		$count_post = esc_attr( get_post_meta( $post->ID, '_post_views_count', true) );
		if( $count_post == ''){
			$count_post = 1;
			add_post_meta( $post->ID, '_post_views_count', $count_post);
		}else{
			$count_post = (int)$count_post + 1;
			update_post_meta( $post->ID, '_post_views_count', $count_post);
		}
	}
}
add_action('wp_head', 'rm_post_view_count');





