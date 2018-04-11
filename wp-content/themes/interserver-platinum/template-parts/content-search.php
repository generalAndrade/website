<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Interserver Platinum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="title-post entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php 
		$hide_meta_index = get_theme_mod( 'hide_meta_index',$ip_default['hide_meta_index'] );
		if ( 'post' == get_post_type() && $hide_meta_index != $ip_default['hide_meta_index']) : ?>
		<div class="post-meta">
			<?php interserver_platinum_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-post">
		<?php
        $full_content_archives = get_theme_mod( 'full_content_archives',$ip_default['full_content_archives'] );
		$full_content_home = get_theme_mod( 'full_content_home',$ip_default['full_content_home'] );
		if ( ($full_content_home == $ip_default['full_content_home'] && is_home() ) || ($full_content_archives == $ip_default['full_content_archives'] && is_archive() ) ) : ?>
			<?php the_content(); ?>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'interserver-platinum' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-post -->

	<footer class="entry-footer">
		<?php interserver_platinum_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->