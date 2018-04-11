<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Interserver Platinum
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function interserver_platinum_body_classes( $classes ) {
	// Adds a class of multi-publisher to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'multi-publisher';
	}

	return $classes;
}
add_filter( 'body_class', 'interserver_platinum_body_classes' );