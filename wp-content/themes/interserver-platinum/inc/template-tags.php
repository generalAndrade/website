<?php
/**
 * Custom template tags for this theme.
 *
 * @package Interserver Platinum
 */

if ( ! function_exists( 'interserver_platinum_post_navigation' ) ) :
function interserver_platinum_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'interserver-platinum' ); ?></h2>
		<div class="nav-links clearfix">
			<?php
				previous_post_link( '<div class="nav-previous"><i class="fa fa-long-arrow-left"></i> %link</div>', '%title' );
				next_post_link( '<div class="nav-next">%link <i class="fa fa-long-arrow-right"></i></div>', '%title' );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'interserver_platinum_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function interserver_platinum_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time(get_option('date_format')) !== get_the_modified_time(get_option('date_format')) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date(get_option('date_format')) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date(get_option('date_format')) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		/* translators: %s: post date */
		_x( 'Posted on %s', 'post-date', 'interserver-platinum' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		/* translators: %s: post author */
		_x( 'By %s', 'post author', 'interserver-platinum' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . wp_kses_data($posted_on) . '</span><span class="byline"> ' . wp_kses_data($byline) . '</span>';
	
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'interserver-platinum' ), __( '1 Comment', 'interserver-platinum' ), __( '% Comments', 'interserver-platinum' ) );
		echo '</span>';
	}

	$categories_list = get_the_category_list( __( ', ', 'interserver-platinum' ) );
	if ( $categories_list && interserver_platinum_categorized_blog() ) {
		/* translators: %s: category name */
		printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s','interserver-platinum' ) . '</span>', wp_kses_data($categories_list) );
	}
}
endif;

if ( ! function_exists( 'interserver_platinum_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function interserver_platinum_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'interserver-platinum' ) );
		if ( $tags_list && is_single() ) {
			/* translators: %s: tag name */
			printf( '<span class="tags-links"><i class="fa fa-tags"></i>' . esc_html__( ' %1$s', 'interserver-platinum' ) . '</span>', wp_kses_data($tags_list) );
		}
	}
	edit_post_link( __( 'Edit', 'interserver-platinum' ), '<span class="edit-link">', '</span>' );
}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function interserver_platinum_categorized_blog() {
	if ( false === ( $cat_list = get_transient( 'interserver_platinum_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$cat_list = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$cat_list = count( $cat_list );

		set_transient( 'interserver_platinum_categories', $cat_list );
	}

	if ( $cat_list > 1 ) {
		// This blog has more than 1 category so interserver_platinum_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so interserver_platinum_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in interserver_platinum_categorized_blog.
 */
function interserver_platinum_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'interserver_platinum_categories' );
}
add_action( 'edit_category', 'interserver_platinum_category_transient_flusher' );
add_action( 'save_post',     'interserver_platinum_category_transient_flusher' );
