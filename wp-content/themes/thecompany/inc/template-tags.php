<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package thecompany
 */


/**
 * Flush out the transients used in thecompany_categorized_blog.
 */
function thecompany_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'thecompany_categories' );
}
add_action( 'edit_category', 'thecompany_category_transient_flusher' );
add_action( 'save_post',     'thecompany_category_transient_flusher' );

function thecompany_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'thecompany_body_classes' );

