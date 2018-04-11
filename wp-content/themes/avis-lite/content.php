<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>
<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
        <div class="featured-image-shadow-box quote_featured_img">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<?php
					$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'avis-lite-standardimg');
				?>
				<a href="<?php the_permalink(); ?>" class="image">
					<img src="<?php echo esc_url($thumbnail[0]);?>" alt="<?php the_title(); ?>" class="featured-image alignnon"/>
				</a>
				
			<?php } ?>
		</div>
		<div class="post_inner_wrap clearfix">
		<?php if(is_sticky($post->ID)) { _e("<div class='sticky-post'>featured</div>",'avis-lite'); } ?>
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="skepost-meta clearfix">			    
			    <div class="author-img"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?></div>
			    <div class="comment-date">
				    <div class="comments"><?php _e('by ','avis-lite');?><span class="author-name"><?php the_author_posts_link(); ?></span><?php _e(' with ','avis-lite');?><span class="commentnum"><?php comments_popup_link(__('No Comments','avis-lite'), __('1 Comment ','avis-lite'), __('% Comments ','avis-lite')) ; ?></span></div>
				    <div class="date"><?php the_time('F j, Y') ?></div>
				</div>
	        </div>
			<!-- skepost-meta -->
	        <div class="skepost">
				<?php the_excerpt(); ?> 
				<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('Read More','avis-lite');?></a></div>		  
	        </div>
	        <!-- skepost -->
        </div>
</div>
<!-- post -->