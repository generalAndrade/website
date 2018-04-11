<?php 
/**
* The template for displaying Tag pages.
* Used to display archive-type pages for posts in a tag.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
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
			<!-- #content --> 
			</div>
			<!-- #container --> 

			<!-- Sidebar -->
			<div id="sidebar" class="span3" role="complementary">
				<?php get_sidebar(); ?>
			</div>
			<div class="clearfix"></div>
			<!-- Sidebar --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>