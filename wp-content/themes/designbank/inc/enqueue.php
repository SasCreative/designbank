<?php
/**
 * design_bank enqueue scripts
 *
 * @package design_bank
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'design_bank_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function design_bank_scripts() {
		// Get the theme data.
		wp_enqueue_style( 'font-awsome', get_stylesheet_directory_uri() .'/vender/fontawesome/css/all.min.css', array(), '5.8.1' );
		wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri() .'//vender/umbrella/css/bootstrap-custom.min.css');
		wp_enqueue_style( 'umbrella-styles', get_stylesheet_directory_uri() .'/vender/umbrella/css/umbrella.min.css', array(),'1.1.2'   );
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/css/style.min.css', array() );
		wp_enqueue_style( 'design_bank-theme', get_stylesheet_uri() );
		

		// wp_enqueue_script( 'font-awsome', get_template_directory_uri() . '/vender/fontawesome/js/all.min.js', array(), '5.8.1' , true );
		// wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/vender/umbrella/bower_components/jquery/dist/jquery.min.js', array(),'2.2.4', false);
		// wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/vender/popper/popper.min.js', array(),'1.1', false);
		// wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/vender/bootstrap/js/bootstrap.min.js', array(),'4.3.1', false);
		// wp_enqueue_script( 'TweenMax-scripts', get_template_directory_uri() . '/vender/umbrella/bower_components/gsap/src/minified/TweenMax.min.js', array(),'1.19.0', false);
		// wp_enqueue_script( 'ScrollToPlugin-scripts', get_template_directory_uri() . '/vender/umbrella/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js', array(),'1.8.0', false);
		// wp_enqueue_script( 'jquery.history-scripts', get_template_directory_uri() . '/vender/umbrella/bower_components/history.js/scripts/bundled/html5/jquery.history.js', array(), true);
		// wp_enqueue_script( 'background-check-scripts', get_template_directory_uri() . '/vender/umbrella/plugins/background-check/background-check.min.js', array(),'1.2.2', false);
		// wp_enqueue_script( 'umbrella-scripts', get_template_directory_uri() . '/vender/umbrella/js/umbrella.min.js', array(),'1.1.2', false);
		// wp_enqueue_script( 'umbrella-init-scripts', get_template_directory_uri() . '/vender/umbrella/js/umbrella-init.js', array(),'1.1.2', false);

		// wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/theme.js', array() , true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'design_bank_scripts' ).

add_action( 'wp_enqueue_scripts', 'design_bank_scripts' );
