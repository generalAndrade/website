<?php
/**
 * The home template file.
 *
 * @package Interserver Platinum
 */

get_header(); 
?>
	<div id="primary" class="content-area col-md-9 <?php echo esc_attr(interserver_platinum_blog_layout()); ?>">
		<main id="main" class="blog-wrapper" role="main">
		<?php if ( have_posts() ) : ?>
		<div class="blog-layout">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
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
	$blog_layout = get_theme_mod('blog_layout', $ip_default['blog_layout']);
	if ($blog_layout == $ip_default['blog_layout'] ) :
	/**
	 * Hook - interserver_platinum_action_sidebar.
	 *
	 * @hooked: interserver_platinum_add_sidebar_widget_area
	 */
	do_action( 'interserver_platinum_action_sidebar' );
	endif;
?>
<?php get_footer(); ?>