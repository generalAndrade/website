<?php
/**
 * Template part for displaying single pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thecompany
 */

?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="single-page">
			<?php if(has_post_thumbnail()): ?>
					<div class="featured-image">
						<?php the_post_thumbnail(); ?>
					</div>
			<?php endif; ?>
					<ul class="post-info list-inline">
					<li><a href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'))); ?>" title=""><i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?></a></li>
						<li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')));?>" title=""><i class="fa fa-user"></i> <?php echo esc_html( get_the_author_meta('display_name') );?></a></li>
						<li><i class="fa fa-comments-o"></i> <?php comments_popup_link(__('0 comment','thecompany'),__('1 comment','thecompany'), __('% comment','thecompany'));?></li>
						<li><i class="fa fa-folder-open"></i> </li>
						<li>
							<?php
						the_category()
		                ?>
						</li>
					</ul>
					<div class="content">
						<?php the_content(); ?>

					</div>
					<?php if(has_tag()):?> 
						<div class="tag-and-share">
							<div class="row">
								<div class="col-sm-8 col-xs-6">
								<div class="tags">
								<?php 
								 	the_tags();
								?>
									
								</div>
							</div>
							
							</div>
						</div>
					<?php endif; ?>

					<div class="author-box">
						<div class="image">
							<?php echo get_avatar(get_the_author_meta('user_email'),60); ?>
						</div>
						<div class="info">
							<p><?php echo esc_html( get_the_author_meta('description') );?></p>
							<h6><a href=" mailto:<?php echo esc_url( get_the_author_meta('user_email') );?>" title=""><?php echo esc_html( get_the_author_meta('display_name') );?> |</a> <?php echo esc_html( get_the_author_meta('user_email') );?></h6>

						</div>
					</div>

					<div class="swift-pager">
						<nav>
							<ul class="pager">                    
								<?php
								previous_post_link( '<li class="previous">%link</li>', _x( '<i class="fa fa-angle-left"></i>','Previous post link','thecompany' ) );
								next_post_link(     '<li class="next">%link</li>', _x( '<i class="fa fa-angle-right"></i>','Next post link','thecompany' ) );
								?>
							</ul>
						</nav><!-- .nav-links -->
					</div>
						
					<?php 

				    $orig_post = $post;
				    global $post;
				    $categories = get_the_category($post->ID);
				    if ($categories) {
				    $category_ids = array();
				    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				    $args=array(
				      'category__in' => $category_ids,
				      'post__not_in' => array($post->ID),
				      'posts_per_page'=> 3, // Number of related posts that will be shown.
				      'ignore_sticky_posts'=>1  
				    );
				    $my_query = new WP_Query( $args );
				    }?>
					<div class="related-post">
					<h3 class="content-title"><?php _e('Related Posts','thecompany');?></h3>
					<div class="row">
					<?php if( $my_query->have_posts() ) :while( $my_query->have_posts() ):
      					$my_query->the_post();?>
						<div class="col-md-4 col-sm-6 col-xs-12 post-grid">
							<!-- Single Post -->
						<div class="post-single">
						 	<?php if(has_post_thumbnail()){ ?>
                  
							<div class="featured-image overlay">
							<?php the_post_thumbnail('thecompany-related-thumb'); ?>
							</div>
							<?php }?>
							<div class="title">
									<h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
							</div>

							<ul class="post-info list-inline">
								<li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')));?>" title=""><i class="fa fa-user"></i>  <?php echo esc_html( get_the_author_meta('display_name') );?></a></li>
								<li><i class="fa fa-comments-o"></i><?php comments_popup_link(__('0 comment','thecompany'),__('1 comment','thecompany'), __('% comment','thecompany'));?></li>
							</ul>
							<div class="post-content">
								<?php the_excerpt(); ?>
							</div>
							<div><a href="<?php the_permalink(); ?>" class="btn btn-theme" title=""><?php _e('keep reading','thecompany');?></a></div>
						</div>
						</div>
					<?php endwhile; endif;  ?>
					</div>
					</div>


				
					<!-- Comment Form -->
				

					<div class="comment-form">            
				            <?php
				        // If comments are open or we have at least one comment, load up the comment template.
				        if ( comments_open() || get_comments_number() ) :
				          comments_template();
				        endif;
				      ?>
				     </div>

				</div>
			</article>