<?php
/**
 * Default theme options.
 *
 * @package Interserver Platinum
 */
 
// Preloader
function interserver_platinum_preloader(){ ?>
  <div class="ip-loader"></div>
<?php }
add_action('interserver_platinum_before_site', 'interserver_platinum_preloader');

// Change the excerpt length
function interserver_platinum_excerpt_length( $length ) {
  $excerpt = get_theme_mod('excerpt_length', '55');
  return $excerpt;

}
add_filter( 'excerpt_length', 'interserver_platinum_excerpt_length', 999 );


// Header image overlay
function interserver_platinum_header_overlay() {
	global $ip_default;
	$overlay = get_theme_mod( 'hide_overlay',$ip_default['hide_overlay']);
	if ( !$overlay ) {
		echo '<div class="overlay"></div>';
	}
}
 
// Get images alt
function interserver_platinum_get_image_alt( $image ) {
    global $wpdb;
    if( empty( $image ) ) {
        return false;
    }
 
    $img_id = attachment_url_to_postid($image);
 
    $alt = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
    return $alt;
}
// Slider Call to Action button
function interserver_platinum_slider_cta_button() {
	global $ip_default;
    $cta_button_text = get_theme_mod('cta_button_text', $ip_default['cta_button_text']);
    $cta_button_url  = get_theme_mod('cta_button_url', $ip_default['cta_button_url']);
    if ($cta_button_text) {
        return '<a href="' . esc_url($cta_button_url) . '" class="cta-button">' . esc_html($cta_button_text) . '</a>';
    }

}
// Header Slider
function interserver_platinum_header_slider() {
  global $ip_default;
	$front_header = get_theme_mod('front_header_type', $ip_default['front_header_type']);
	$site_header = get_theme_mod('site_header_type', $ip_default['site_header_type']);
	 if ( $front_header == $ip_default['front_header_type'] && is_front_page() || $site_header == 'slider' && !is_front_page()) {
    //Get the slider options
    $hide_caption = get_theme_mod('hide_slider_caption', $ip_default['hide_slider_caption']);
    $cta_button  = interserver_platinum_slider_cta_button();
   
    //Slider text
    	$titles = array(
    		'slider_title_1' => get_theme_mod('slider_title_1', $ip_default['slider_title_1']),
    		'slider_title_2' => get_theme_mod('slider_title_2', $ip_default['slider_title_2']),
    		'slider_title_3' => get_theme_mod('slider_title_3', $ip_default['slider_title_3']),
    		'slider_title_4' => get_theme_mod('slider_title_4'),
    		'slider_title_5' => get_theme_mod('slider_title_5'),
    	);
    	$subtitles = array(
    		'slider_subtitle_1' => get_theme_mod('slider_subtitle_1', $ip_default['slider_subtitle_1']),
    		'slider_subtitle_2' => get_theme_mod('slider_subtitle_2', $ip_default['slider_subtitle_2']),
    		'slider_subtitle_3' => get_theme_mod('slider_subtitle_3'),
    		'slider_subtitle_4' => get_theme_mod('slider_subtitle_4'),
    		'slider_subtitle_5' => get_theme_mod('slider_subtitle_5'),    		
    	);
		$images = array(
				'slider_image_1' => get_theme_mod('slider_image_1', $ip_default['slider_image_1']),
				'slider_image_2' => get_theme_mod('slider_image_2', $ip_default['slider_image_2']),
				'slider_image_3' => get_theme_mod('slider_image_3'),
				'slider_image_4' => get_theme_mod('slider_image_4'),
				'slider_image_5' => get_theme_mod('slider_image_5'),
		);

    ?>
    <section class="home_slider">
      <div class="slider-wrapper theme-default">
           <div id="slider" class="nivoSlider">
            <?php $cnt = 1; ?>
            <?php foreach ( $images as $image ) {
                if ( $image ) {
                    $image_alt = interserver_platinum_get_image_alt( $image );
                    ?>
                 <img src="<?php echo esc_attr($image); ?>" title="#slidecaption<?php echo esc_attr( $cnt ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>"/>    
            <?php
        	}
          $cnt++;
			} 	
			?>
			</div>
            <?php
		if( ! $hide_caption ) { ?>
       	<?php $cntc = 1;
		foreach ( $images as $image_cap ) {
            if ( $image_cap ) { 
			?>
             <div id="slidecaption<?php echo esc_attr( $cntc ); ?>" class="nivo-html-caption">
                  <div class="slide-inner">
                     <h2 class="maintitle"><?php echo esc_html( $titles['slider_title_' . $cntc] ); ?></h2>
                     <p class="subtitle"><?php echo esc_html( $subtitles['slider_subtitle_' . $cntc] ); ?></p>
                     <div class="clear"></div>
                    <?php echo $cta_button; ?>
                 </div>
             </div>  
         <?php }   
          $cntc++;  
        }
	 ?>
	
		<?php }
        ?>
       </div>
  <div class="clear"></div>
  </section>
  <?php }
}

// Header Image
function interserver_platinum_header_image() {
	global $ip_default;
	$front_header = get_theme_mod('front_header_type', $ip_default['front_header_type']);
	$site_header = get_theme_mod('site_header_type', $ip_default['site_header_type']);
	if($front_header == 'image' && is_front_page() || $site_header == $ip_default['site_header_type'] && !is_front_page() ){ ?>
	<div class="header-image">
			<?php interserver_platinum_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
	</div>
	<?php 
	}
}
// Header video
function interserver_platinum_header_video() {
	global $ip_default;
	$front_header = get_theme_mod('front_header_type', $ip_default['front_header_type']);
	$site_header = get_theme_mod('site_header_type', $ip_default['site_header_type']);
	if ( !function_exists('the_custom_header_markup') ) {
		return;
	}
	if ( $front_header == 'core-video' && is_front_page() || $site_header == 'core-video' && !is_front_page() ) {
		the_custom_header_markup();
	}
}
// Blog layout
function interserver_platinum_blog_layout() {
	global $ip_default;
	$layout = get_theme_mod('blog_layout', $ip_default['blog_layout']);
	return $layout;
}