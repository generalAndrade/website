<!--Blog section-->
<?php
$blog_title = $blog_subtitle = $blog_desc = "";
$blog_title = esc_attr(get_theme_mod( 'blog_title', __( 'Recent Posts', 'txo' )));
$blog_subtitle = esc_attr(get_theme_mod( 'blog_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));


$blog_bg_image = esc_url(get_theme_mod( 'blog_bg_image', '' ));
$blog_bg_repeat = esc_attr(get_theme_mod( 'blog_bg_repeat', 'repeat' ));
$blog_bg_attach = esc_attr(get_theme_mod( 'blog_bg_attach', 'fixed' ));
$blog_bg_size = esc_attr(get_theme_mod( 'blog_bg_size', 'auto' ));
$blog_bg_position = esc_attr(get_theme_mod( 'blog_bg_position', 'left top' ));
$blog_bg_color = esc_attr(get_theme_mod( 'blog_bg_color', 'rgba(232, 232, 232, 1)' ));
$blog_overlay_color = esc_attr(get_theme_mod( 'blog_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$blog_fullwidth = esc_attr(get_theme_mod( 'blog_fullwidth', 1 ));
$blog_placeholder = esc_attr(get_theme_mod( 'blog_placeholder', 1 ));

$blog_pagination = esc_attr(get_theme_mod( 'blog_pagination', 0 ));
$blog_column = esc_attr(get_theme_mod( 'blog_column', '4' ));

$blog_title_color = esc_attr(get_theme_mod( 'blog_title_color', '#484848' ));
$blog_subtitle_color = esc_attr(get_theme_mod( 'blog_subtitle_color', '#595959' ));

$section_style = '';

$section_style .= 'background-image : url('. $blog_bg_image . '); ';
$section_style .= 'background-repeat : '. $blog_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $blog_bg_attach . '; ';
$section_style .= 'background-size : '. $blog_bg_size . '; ';
$section_style .= 'background-position : '. $blog_bg_position . '; ';
//$section_style .= 'color : '. $blog_text_color . '; ';
$section_style .= 'background-color : '. $blog_bg_color . ';';


$section_fullwidth = '';

if( $blog_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

	$width = 600;
	$height = 360;
	
	//$post_in_cat = tx_shortcodes_comma_delim_to_array( $atts['category_id'] );
	$post_comments = '';

	$posts_per_page = get_theme_mod( 'blog_posts', 4 );
	$total_column = $blog_column;
	$tx_category = 'show';
	$tx_carousel = 'no';
	$show_pagination = $blog_pagination;
	$carousel = 'no';	
	
	$return_string = '';
	
	if( $tx_carousel == 'no' ) {
   		$return_string .= '<div class="tx-blog tx-post-row tx-masonry">';
	} else
	{
   		$return_string .= '<div class="tx-blog tx-post-row tx-carousel" data-columns="'.$total_column.'">';		
	}
	
	wp_reset_query();
	global $post;
	
	$args = array(
		'posts_per_page' => $posts_per_page,
		'orderby' => 'date', 
		'order' => 'DESC',
		'ignore_sticky_posts' => 1,
		//'category__in' => $post_in_cat, //use post ids		
	);

	if ( $show_pagination == 1 && $tx_carousel == 'no' )
	{	
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args['paged'] = $paged;
		$args['prev_text'] = __('&laquo;', 'txo');
		$args['next_text'] = __('&raquo;', 'txo');
		$args['show_all'] = false;
	}

	
	query_posts( $args );
   
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	
		$post_comments = get_comments_number();
			
		$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );

		$thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		if (function_exists('aq_resize')) {
			$thumb_image_url = aq_resize( $thumb_image_url[0], $width, $height, true, true, true );
		} else
		{
			$thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnails' );
			$thumb_image_url = $thumb_image_url[0];
		}
		$return_string .= '<div class="tx-blog-item tx-post-col-'.$total_column.'"><div class="tx-border-box">';

		if ( has_post_thumbnail() ) { 
			$return_string .= '<div class="tx-blog-img"><a href="'.esc_url($full_image_url[0]).'" class="tx-colorbox">';
			$return_string .= '<img src="'.esc_url($thumb_image_url).'" alt="" class="blog-image" /></a><span class="tx-post-comm"><span>'.$post_comments.'</span></span></div>';
		} elseif ( $blog_placeholder == 1 ) { 
			$return_string .= '<div class="tx-blog-img"><a href="'. TX_ONEPAGER_URL . 'images/image-placeholder.jpg" class="tx-colorbox">';
			$return_string .= '<img src="'. TX_ONEPAGER_URL . 'images/image-placeholder.jpg" alt="" class="blog-image" /></a><span class="tx-post-comm"><span>'.$post_comments.'</span></span></div>';
		} else
		{
			$return_string .= '<div class="tx-blog-imgpad"></div>';
		}

		$return_string .= '<div class="tx-post-content"><h3 class="tx-post-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
		if ( $tx_category == "show" )
		{
			$return_string .= '<div class="tx-category">'.get_the_category_list( ', ' ).'</div>';	
		} else
		{
			$return_string .= '<div style="height: 16px;"></div>';
		}
		
		//$return_string .= '<div class="tx-blog-content">'.txo_excerpt_max_charlength(260).'</div>';
		$return_string .= '<div class="tx-blog-content">'.get_the_excerpt().'</div>';

		$return_string .= '<div class="tx-meta">';
		$return_string .= '<span class="tx-author">By : <a href="'.esc_url( get_author_posts_url( get_the_author_meta("ID") ) ).'">'.get_the_author().'</a></span>';
		$return_string .= '<span class="tx-date"> | '.get_the_date('M j, Y').'</span>';
		$return_string .= '</div>';
		
		
		$return_string .= '</div></div></div>';		
		
		
	endwhile; else :
		$return_string .= '<div class="tx-noposts"><p>Sorry, no posts matched your criteria. Please add some posts with featured images.</p></div>';
	endif;
  	
   	$return_string .= '</div>';

	if ($show_pagination == 1 && $tx_carousel == 'no' ) {
		$return_string .= '<div class="nx-paging" style="color: '.$blog_subtitle_color.';"><div class="nx-paging-inner">'.paginate_links( $args ).'</div></div>';
	}

   	wp_reset_query();

	
?>
<section id="blog" class="txsec-blog">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=blog_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=blog_options' ); ?>" class="editcontent"><?php _e( 'Options', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="blog_inner">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $blog_overlay_color; ?> ;">        
        <div class="tx-fw-content">
        	<div class="section-head">
                <h2 class="blog-title" style="color: <?php echo $blog_title_color; ?>"><?php echo $blog_title; ?></h2>
                <h3 class="blog-subtitle" style="color: <?php echo $blog_subtitle_color; ?>"><?php echo $blog_subtitle; ?></h3>
            </div>
            
            <?php echo $return_string; ?>
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/snlog section-->

