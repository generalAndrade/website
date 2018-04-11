<?php 
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
*/
get_header(); ?>

<div class="main-wrapper-item"> 
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="page-content default-pagetemp">
		<div class="container post-wrap">
			<div class="row-fluid">
				<!-- content -->
				<div id="content" class="span9" role="main">
					<div class="post" id="post-<?php the_ID(); ?>">
						<!-- skepost -->
						<div class="skepost">
							<?php the_content(); ?>
							<?php wp_link_pages( array('before' => '<p><strong>'.__('Pages :','avis-lite').'</strong>','after' => '</p>', __('number','avis-lite') ) ); ?>
						</div>
					</div>

					<div class="clearfix"></div>
						<div class="comments-template">
							<?php comments_template( '', true ); ?>
						</div>
					<?php endwhile; ?>

					<?php else :  ?>
						<div class="post">
							<h2><?php _e('Page Does Not Exist','avis-lite'); ?></h2>
						</div>
					<?php endif; ?>
						<div class="clearfix"></div>
						<?php edit_post_link( __('Edit','avis-lite'), '', ''); ?>
				</div>

				<!-- Sidebar -->
				<div id="sidebar" class="span3" role="complementary">
					<?php get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>