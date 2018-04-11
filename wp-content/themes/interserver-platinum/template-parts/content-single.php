<?php
/**
 * @package Interserver Platinum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	global $ip_default;
	$post_feat_img = get_theme_mod( 'post_feat_image', $ip_default['post_feat_image'] );
	 if ( has_post_thumbnail() && ! $post_feat_img  ) : ?>
		<div class="entry-thumb">
			<?php the_post_thumbnail('interserver-platinum-large-thumb'); ?>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="title-post entry-title">', '</h1>' ); ?>
		<?php 
		$hide_meta_single = get_theme_mod( 'hide_meta_single', $ip_default['hide_meta_single'] );
		if (! $hide_meta_single) : ?>
		<div class="meta-post">
			<?php interserver_platinum_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'interserver-platinum' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php interserver_platinum_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
