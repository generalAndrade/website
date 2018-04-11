<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Interserver Platinum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(!is_front_page()) : ?>
	<header class="entry-header">   
		<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<?php endif;?>
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
		<?php edit_post_link( __( 'Edit', 'interserver-platinum' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->