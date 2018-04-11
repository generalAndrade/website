<?php
/**
 * The template for displaying search results pages.
 *
 * @package Interserver Platinum
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="blog-wrapper" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h3><?php 
				/* translators: %s: search-term */
				sprintf( __( 'Search Results for: %s', 'interserver-platinum' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
    
	<?php
        /**
         * Hook - interserver_platinum_action_sidebar.
         *
         * @hooked: interserver_platinum_add_sidebar_widget_area
         */
        do_action( 'interserver_platinum_action_sidebar' );
    ?>
    <?php get_footer(); ?>
