<?php 
/**
 * The template for displaying Error 404 page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<div class="page-content">
	<div class="container" id="error-404">
		<div class="row-fluid">
			<div id="content" class="span12">
				<div class="post">
					<div class="skepost _404-page">
						<div class="error-txt-first"><img src="<?php echo get_template_directory_uri().'/images/404-image.png'; ?>"></div>
						<div class="error-txt"><?php _e( 'WE ARE SORRY', 'avis-lite' ); ?></div>
						<p><?php _e('We seem to have lost this page, try one of instead this.','avis-lite') ?></p>
						<?php get_search_form(); ?>
					</div>
					<!-- skepost --> 
				</div>
				<!-- post -->
			</div>
			<!-- content --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>