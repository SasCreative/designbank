<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package design_bank
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'design_bank_posted_on' ) ) {
	function design_bank_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s"> (%4$s) </time>';
		}
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on   = apply_filters(
			'design_bank_posted_on', sprintf(
				'<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
				esc_html_x( 'Posted on', 'post date', 'design_bank' ),
				esc_url( get_permalink() ),
				apply_filters( 'design_bank_posted_on_time', $time_string )
			)
		);
		$byline      = apply_filters(
			'design_bank_posted_by', sprintf(
				'<span class="byline"> %1$s<span class="author vcard"> <a class="url fn n" href="%2$s">%3$s</a></span></span>',
				$posted_on ? esc_html_x( 'by', 'post author', 'design_bank' ) : esc_html_x( 'Posted by', 'post author', 'design_bank' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_html( get_the_author() )
			)
		);
		echo $posted_on . $byline; // WPCS: XSS OK.
	}
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
if ( ! function_exists( 'design_bank_entry_footer' ) ) {
	function design_bank_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'design_bank' ) );
			if ( $categories_list && design_bank_categorized_blog() ) {
				/* translators: %s: Categories of current post */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %s', 'design_bank' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'design_bank' ) );
			if ( $tags_list ) {
				/* translators: %s: Tags of current post */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %s', 'design_bank' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'design_bank' ), esc_html__( '1 Comment', 'design_bank' ), esc_html__( '% Comments', 'design_bank' ) );
			echo '</span>';
		}
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'design_bank' ),
				the_title( '<span class="sr-only">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
if ( ! function_exists( 'design_bank_categorized_blog' ) ) {
	function design_bank_categorized_blog() {
		if ( false === ( $all_the_cool_cats = get_transient( 'design_bank_categories' ) ) ) {
			// Create an array of all the categories that are attached to posts.
			$all_the_cool_cats = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			) );
			// Count the number of categories that are attached to the posts.
			$all_the_cool_cats = count( $all_the_cool_cats );
			set_transient( 'design_bank_categories', $all_the_cool_cats );
		}
		if ( $all_the_cool_cats > 1 ) {
			// This blog has more than 1 category so design_bank_categorized_blog should return true.
			return true;
		} else {
			// This blog has only 1 category so design_bank_categorized_blog should return false.
			return false;
		}
	}
}

/**
 * Flush out the transients used in design_bank_categorized_blog.
 */
add_action( 'edit_category', 'design_bank_category_transient_flusher' );
add_action( 'save_post',     'design_bank_category_transient_flusher' );

if ( ! function_exists( 'design_bank_category_transient_flusher' ) ) {
	function design_bank_category_transient_flusher() {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		// Like, beat it. Dig?
		delete_transient( 'design_bank_categories' );
	}
}

if ( ! function_exists( 'design_bank_body_attributes' ) ) {
	/**
	 * Displays the attributes for the body element.
	 */
	function design_bank_body_attributes() {
		/**
		 * Filters the body attributes.
		 *
		 * @param array $atts An associative array of attributes.
		 */
		$atts = array_unique( apply_filters( 'design_bank_body_attributes', $atts = array() ) );
		if ( ! is_array( $atts ) || empty( $atts ) ) {
			return;
		}
		$attributes = '';
		foreach ( $atts as $name => $value ) {
			if ( $value ) {
				$attributes .= sanitize_key( $name ) . '="' . esc_attr( $value ) . '" ';
			} else {
				$attributes .= sanitize_key( $name ) . ' ';
			}
		}
		echo trim( $attributes ); // phpcs:ignore WordPress.Security.EscapeOutput
	}
}
