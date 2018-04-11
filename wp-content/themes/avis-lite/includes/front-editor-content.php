<?php if ( 'page' == get_option( 'show_on_front' ) ) {  ?>
	<!-- PAGE EDITER CONTENT -->
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="avis-section front-page-content">
				<div class="container">
					<div class="row-fluid"> 
						<?php the_content(); ?>
					</div>
					<div class="border-content-box bottom-space"></div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?> 
	<!-- \\PAGE EDITER CONTENT -->
<?php } ?>

<?php if( get_theme_mod('avis_home_blog_sec', 'on') == 'on') { ?>
	<div id="front-content-box"  class="avis-section">
		<div class="container">
			<div class="row-fluid">
				<div class="avis-top">
					<h2 class="section_heading"><?php echo wp_kses_post(get_theme_mod('avis_home_blog_title', __('Latest Posts','avis-lite'))); ?></h2>
					<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div>
				</div>
			</div>

			<div class="front-blog-wrap row-fluid">
			<?php $avis_lite_blogno = esc_attr( get_theme_mod('avis_home_blog_num', '6') );

				$avis_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $avis_lite_blogno,'ignore_sticky_posts' => true ) );

			?>
				<?php if ( $avis_lite_latest_loop->have_posts() ) : ?>

				<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $avis_lite_latest_loop->have_posts() ) : $avis_lite_latest_loop->the_post(); ?>
						<div class="span4">
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('Continue Reading','avis-lite');?></a></div>
						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.', 'avis-lite' ); ?></p>
				<?php endif; ?>
			</div>
	 	</div>
	</div>
	<?php } 