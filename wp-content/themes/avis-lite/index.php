<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<div class="main-wrapper-item">
	<div class="container post-wrap">
		 <div class="row-fluid">
			  <div id="container" class="span9" role="main">
				<!-- content -->
				<div id="content">
					<?php if(have_posts()) : ?>
					<?php /* The loop */ ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
						<?php get_template_part( 'includes/navigation', 'section' ); ?>
					<?php else :  ?>
					<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			  </div>


			  <!-- Sidebar -->
			  <div id="sidebar" class="span3" role="complementary">
				<?php get_sidebar(); ?>
			  </div>

		 </div>
	 </div>
</div>
<?php get_footer(); ?>