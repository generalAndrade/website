<?php
/**
 * Template Name: Fullwidth Template
 *
 * This is the Normal Page Template like default page.php, but this is without sidebar.
 */
?>

<?php get_header(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="page-content fullwidth-temp">
	<div class="container post-wrap">
		<div class="row-fluid">
			<div id="content" class="span12" role="main">
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
			<!-- content -->
		</div>
	</div>
</div>
<?php get_footer(); ?>