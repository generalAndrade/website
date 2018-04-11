<!--service section-->
<?php
$services_title = $services_subtitle = $services_desc = "";
$services_title = esc_attr(get_theme_mod( 'services_title', __( 'Our Services', 'txo' )));
$services_subtitle = esc_attr(get_theme_mod( 'services_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));


$services_bg_image = esc_url(get_theme_mod( 'services_bg_image', get_template_directory_uri() . '/images/trans-pat-6-not.png' ));
$services_bg_repeat = esc_attr(get_theme_mod( 'services_bg_repeat', 'repeat' ));
$services_bg_attach = esc_attr(get_theme_mod( 'services_bg_attach', 'fixed' ));
$services_bg_size = esc_attr(get_theme_mod( 'services_bg_size', 'auto' ));
$services_bg_position = esc_attr(get_theme_mod( 'services_bg_position', 'left top' ));
$services_text_color = esc_attr(get_theme_mod( 'services_text_color', '#FFFFFF' ));
$services_bg_color = esc_attr(get_theme_mod( 'services_bg_color', 'rgba(229, 126, 38, 0.2)' ));
$services_overlay_color = esc_attr(get_theme_mod( 'services_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$services_fullwidth = esc_attr(get_theme_mod( 'services_fullwidth', 1 ));

$bg_image = esc_attr(get_theme_mod( 'services_text', __('facilisis risus.', 'txo' )));

$section_style = '';

$section_style .= 'background-image : url('. $services_bg_image . '); ';
$section_style .= 'background-repeat : '. $services_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $services_bg_attach . '; ';
$section_style .= 'background-size : '. $services_bg_size . '; ';
$section_style .= 'background-position : '. $services_bg_position . '; ';
$section_style .= 'color : '. $services_text_color . '; ';
$section_style .= 'background-color : '. $services_bg_color . ';';


$section_fullwidth = '';

if( $services_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}
	
?>
<section id="services" class="txsec-services">
    <div class="services_inner">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $services_overlay_color; ?> ;">        
        <div class="tx-fw-content">
            <h2 class="services-title"><?php echo $services_title; ?></h2>
            <h3 class="services-subtitle"><?php echo $services_subtitle; ?></h3>
            <p class="services-desc"><?php echo $section_style; ?></p> 
            
            
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/service section-->

