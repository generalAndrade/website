<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thecompany
 */

?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-single">
					<div class="clearfix"></div>
					 <?php if (has_post_thumbnail()) : ?>
					<div class="featured-image">
						<?php the_post_thumbnail('thecompany-cat_thumb'); ?>
					</div>
					<?php endif;?> 
					<h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
					<ul class="post-info list-inline">
						<li><a href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'))); ?>" title=""><i class="fa fa-calendar"></i> <?php echo get_the_date('d M Y');?></a></li>
						<li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')));?>" title=""><i class="fa fa-user"></i> <?php echo esc_html( get_the_author_meta('display_name') );?></a></li>
						<li><i class="fa fa-comments-o"></i> <?php comments_popup_link(__('0 comment','thecompany'),__('1 comment','thecompany'), __('% comment','thecompany'));?></li>
						
						
					</ul>
					<div class="post-content">
						<?php the_excerpt(); ?>
					</div>
					<div><a href="<?php the_permalink(); ?>" class="btn btn-theme" title=""><?php _e('Read More','thecompany'); ?></a></div>
				</div>
				</article>
				<!-- / Single Post -->