<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
$avis_lite_facebook  = esc_url( get_theme_mod('avis_fb_url', '#') );
$avis_lite_flickr    = esc_url( get_theme_mod('avis_fl_url', '#') );
$avis_lite_linkedin  = esc_url( get_theme_mod('avis_lin_url', '#') );
$avis_lite_gpluseone = esc_url( get_theme_mod('avis_gplus_url', '#') );
$avis_lite_twitter   = esc_url( get_theme_mod('avis_twitter_url', '#') );
$avis_lite_skype   = esc_url( get_theme_mod('avis_skype_url', '#') );
$avis_lite_instagram   = esc_url( get_theme_mod('avis_instagram_url', '#') );
$avis_lite_vk   = esc_url( get_theme_mod('avis_vk_url', '#') );
$avis_lite_whatsapp   = esc_url( get_theme_mod('avis_whatsapp_url', '#') );

?>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer" class="avis-section" role="contentinfo">
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper">
				<?php if( is_active_sidebar('footer-sidebar') ) { ?>	
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
				<?php } else { ?>
					<div class="avis-footer-container span3 avis-container widget_archive">
						<h3 class="avis-title avis-footer-title"><?php _e('Archives','avis-lite'); ?></h3>
						<ul>
							<?php wp_get_archives(array( 'limit' => 5 )); ?>
						</ul>
					</div>
					<div class="avis-footer-container span3 avis-container widget_archive">
						<h3 class="avis-title avis-footer-title"><?php _e('Popular Post','avis-lite'); ?></h3>
						<ul>
							<?php wp_get_archives(array( 'limit' => 5 )); ?>
						</ul>
					</div>
					<div class="avis-footer-container span3 avis-container widget_search widget_tag_cloud">
						<?php get_search_form( ); ?>
						<br/>
						<h3 class="avis-title avis-footer-title"><?php _e('More Links','avis-lite'); ?></h3>
						<div class="menu-footer-menu-container">
							<ul id="menu-footer-menu" class="menu">
								<?php wp_tag_cloud( array('number' => 7) );  ?>
							</ul>
						</div>
					</div>
					<?php
					/**
					* Filter the arguments for the Recent Posts widget.
					*
					* @since 3.4.0
					*
					* @see WP_Query::get_posts()
					*
					* @param array $args An array of arguments used to retrieve the recent posts.
					*/
					$r = new WP_Query( apply_filters( 'widget_posts_args', array('posts_per_page'=>5, 'no_found_rows'=>true, 'post_status'=>'publish', 'ignore_sticky_posts'=>true ) ) );

					if ($r->have_posts()) :
					?>
					<div class="avis-footer-container span3 avis-container widget_recent_entries">
						<h3 class="avis-title avis-footer-title"><?php _e('Top Categories','avis-lite'); ?></h3>
						<ul>
							<?php while ( $r->have_posts() ) : $r->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<?php
					// Reset the global $the_post as this query will have stomped on it
					wp_reset_postdata();
					endif;
					?>
				<?php } ?>
				<div class="clearfix"></div>
			</div><!-- second_wrapper -->
		</div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<div class="copyright span6"> <?php echo wp_kses_post(get_theme_mod('avis_copyright', __('Copyright &copy; Powered by WordPress', 'avis-lite') ) ); ?>
				<p><?php printf(__('Avis Lite Theme by %s','avis-lite'),'<a href="'.esc_url('https://sketchthemes.com').'"><strong>SketchThemes</strong></a>');?></p></div>
				<div class="owner span6">
					<!-- Footer Follow Us Section Start -->
						<div class="social-icons">
							<?php if($avis_lite_facebook){?><li class="fb-icon"><a href="<?php echo esc_url($avis_lite_facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if($avis_lite_flickr){?><li class="flickr-icon"><a href="<?php echo esc_url($avis_lite_flickr); ?>" target="_blank"><i class="fa fa-flickr"></i></a></li><?php } ?>							
							<?php if($avis_lite_linkedin){?><li class="linkedin-icon"><a href="<?php echo esc_url($avis_lite_linkedin); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li><?php } ?>
							<?php if($avis_lite_gpluseone){?><li class="gplus-icon"><a href="<?php echo esc_url($avis_lite_gpluseone); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
							<?php if($avis_lite_twitter){?><li class="tw-icon"><a href="<?php echo esc_url($avis_lite_twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if($avis_lite_skype){?><li class="skype-icon"><a href="<?php echo esc_url($avis_lite_skype); ?>" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>
							<?php if($avis_lite_instagram){?><li class="instagram-icon"><a href="<?php echo esc_url($avis_lite_instagram); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li><?php } ?>
							<?php if($avis_lite_vk){?><li class="vk-icon"><a href="<?php echo esc_url($avis_lite_vk); ?>" target="_blank"><i class="fa fa-vk"></i></a></li><?php } ?>
							<?php if($avis_lite_whatsapp){?><li class="whatsapp-icon"><a href="<?php echo esc_url($avis_lite_whatsapp); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li><?php } ?>
						</div>
					<!-- Footer Follow Us Section End -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="<?php _e('Back To Top', 'avis-lite'); ?>" id="backtop"></a>
	<?php wp_footer(); ?>	
</body>
</html>