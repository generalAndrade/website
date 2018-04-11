<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Interserver Platinum
 */

get_header(); ?>
	<div id="primary" class="content-area col-md-9 <?php echo esc_attr(interserver_platinum_blog_layout()); ?>">
		<main id="main" class="blog-wrapper" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h3 class="archive-title">', '</h3>' );
					the_archive_description( '<div class="archieve-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="blog-layout">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>
			<?php endwhile; ?>
			</div>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	if ( get_theme_mod('blog_layout','classic') == 'classic' ) :
	
	/**
	 * Hook - interserver_platinum_action_sidebar.
	 *
	 * @hooked: interserver_platinum_add_sidebar_widget_area
	 */
	do_action( 'interserver_platinum_action_sidebar' );
	endif;
?>
<?php get_footer(); ?>
