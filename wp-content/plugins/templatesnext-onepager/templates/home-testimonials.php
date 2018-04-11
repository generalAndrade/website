<!--testimonial section-->
<?php
$testimonials_title = $testimonials_subtitle = $testimonials_desc = "";
$testimonials_title = esc_attr(get_theme_mod( 'testimonials_title', __( 'Testimonials', 'txo' )));
$testimonials_subtitle = esc_attr(get_theme_mod( 'testimonials_subtitle', __( 'TemplatesNext, The Next Generation Media Development Company', 'txo' )));


$testimonials_bg_image = esc_url(get_theme_mod( 'testimonials_bg_image', '' ));
$testimonials_bg_repeat = esc_attr(get_theme_mod( 'testimonials_bg_repeat', 'repeat' ));
$testimonials_bg_attach = esc_attr(get_theme_mod( 'testimonials_bg_attach', 'fixed' ));
$testimonials_bg_size = esc_attr(get_theme_mod( 'testimonials_bg_size', 'auto' ));
$testimonials_bg_position = esc_attr(get_theme_mod( 'testimonials_bg_position', 'left top' ));
$testimonials_bg_color = esc_attr(get_theme_mod( 'testimonials_bg_color', 'rgba(255, 255, 255, 1)' ));
$testimonials_overlay_color = esc_attr(get_theme_mod( 'testimonials_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$testimonials_fullwidth = esc_attr(get_theme_mod( 'testimonials_fullwidth', 1 ));

$testimonials_title_color = esc_attr(get_theme_mod( 'testimonials_title_color', '#484848' ));
$testimonials_subtitle_color = esc_attr(get_theme_mod( 'testimonials_subtitle_color', '#595959' ));
$testimonials_text_color = esc_attr(get_theme_mod( 'testimonials_text_color', '#484848' ));



$section_style = '';

$section_style .= 'background-image : url('. $testimonials_bg_image . '); ';
$section_style .= 'background-repeat : '. $testimonials_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $testimonials_bg_attach . '; ';
$section_style .= 'background-size : '. $testimonials_bg_size . '; ';
$section_style .= 'background-position : '. $testimonials_bg_position . '; ';
$section_style .= 'background-color : '. $testimonials_bg_color . ';';


$section_fullwidth = '';

if( $testimonials_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$testimonials_preset = array (
	array(
		'testimonials_text'	=> __( 'Awesome theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!', 'txo' ),
		'testimonials_name' 	=> __( 'Charles Jhones', 'txo' ),
		'testimonials_desig' 	=> __( 'Marketing Manager', 'txo' ),
		'testimonials_org'  	=> __( 'Aster Media', 'txo' ), 
		'testimonials_image' 	=> '',										
	),
	array(
		'testimonials_text'	=> __( 'An easy to use and powerful theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!', 'txo' ),
		'testimonials_name' 	=> __( 'Joseph Martin', 'txo' ),
		'testimonials_desig' 	=> __( 'Marketing Executive', 'txo' ),
		'testimonials_org'  	=> __( 'East West Media', 'txo' ), 
		'testimonials_image' 	=> '',												
	),
	array(
		'testimonials_text'	=> __( 'A wordpress theme with great features! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!', 'txo' ),
		'testimonials_name' 	=> __( 'Richard Miller', 'txo' ),
		'testimonials_desig' 	=> __( 'Creative Director', 'txo' ),
		'testimonials_org'  	=> __( 'Leo Burnett Ltd', 'txo' ), 
		'testimonials_image' 	=> '',													
	),	
);	

$testimonials = get_theme_mod('txo_testimonial', $testimonials_preset);
$testimonials_loop = "";
$testimonial_no = 1;
$template_dir = get_template_directory_uri();

foreach( $testimonials as $testimonial ) {
	If ( $testimonial_no <= 3 ) {
		
		$testimonial_text = esc_attr($testimonial['testimonials_text']);
		$testimonial_name = esc_attr($testimonial['testimonials_name']);
		$testimonial_desig = esc_attr($testimonial['testimonials_desig']);
		$testimonial_org = esc_attr($testimonial['testimonials_org']);
		$testimonial_image = esc_attr($testimonial['testimonials_image']);		
		
		if ( false !== strpos( $testimonial_image, $template_dir ) ) {
			$testimonial_url = $testimonial_image;
		} else
		{
			$testimonial_image_url = wp_get_attachment_image_src( $testimonial_image, 'txo-slider-thumb' );
			$testimonial_image_url = $testimonial_image_url[0];
		}
		
		$testimonials_loop .= '<div class="tx-testi-item" style="">';
        	$testimonials_loop .= '<span class="tx-testi-text">'.$testimonial_text.'</span>';
            $testimonials_loop .= '<span class="tx-testi-name">'.$testimonial_name.'</span>';
            $testimonials_loop .= '<span class="tx-testi-desig">'.$testimonial_desig.', </span>';
            $testimonials_loop .= '<span class="tx-testi-org">'.$testimonial_org.'</span>';
        $testimonials_loop .= '</div>';
		
		
		$testimonial_no++;		

	}
}

	
?>
<section id="testimonials" class="txsec-testimonials">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
            <span class="editcontent"><?php _e( 'Contents', 'txo' ) ?></span>            
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=testimonials_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=testimonials_options' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=testimonial' ); ?>" class="editcontent"><?php _e( 'Content', 'txo' ) ?></a>                
            </div>
        <?php }?>
	</div>
    
    <div class="testimonials_inner">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $testimonials_overlay_color; ?> ;">        
        <div class="tx-fw-content" style="color: <?php echo $testimonials_text_color; ?>;">
            <h2 class="testimonials-title" style="color: <?php echo $testimonials_title_color; ?>"><?php echo $testimonials_title; ?></h2>
            <h3 class="testimonials-subtitle" style="color: <?php echo $testimonials_subtitle_color; ?>"><?php echo $testimonials_subtitle; ?></h3>
            
                <div class="tx-testiin">
                    <div class="tx-testimonials">
                    	<?php echo $testimonials_loop; ?>                                                     
                    </div>
                </div>

        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/testimonial section-->

