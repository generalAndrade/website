<?php 
/**
* The template for displaying Search Results pages.
*
*/
get_header(); ?>

<div class="main-wrapper-item">
	<div class="container post-wrap"> 
		<div class="row-fluid">
			<div id="container" class="span9">
				<div id="content" role="main">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
						<?php get_template_part( 'includes/navigation', 'section' ); ?>
					<?php else :  ?>
					<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			<!-- content --> 
			</div>

			<!-- Sidebar -->
			<div id="sidebar" class="span3" role="complementary">
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>