<?php
/**
 * The template for displaying all single posts.
 *
 * @package Interserver Platinum
 */

get_header(); ?>

	<?php if (get_theme_mod('fullwidth_single',$ip_default['fullwidth_single'])) { //Check if the post needs to be full width
		$fullwidth = 'fullwidth';
	} else {
		$fullwidth = '';
	} ?>

	<?php do_action('interserver_platinum_before_content'); ?>

	<div id="primary" class="content-area col-md-9 <?php echo esc_attr($fullwidth); ?>">
		<main id="main" class="blog-wrapper" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php interserver_platinum_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( get_theme_mod('fullwidth_single', 0) != 1 ) {
	/**
	 * Hook - interserver_platinum_action_sidebar.
	 *
	 * @hooked: interserver_platinum_add_sidebar_widget_area
	 */
	do_action( 'interserver_platinum_action_sidebar' );
} 
get_footer(); ?>