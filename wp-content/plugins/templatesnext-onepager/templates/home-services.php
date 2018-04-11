<!--service section-->
<?php

global $txo_allowed_html;

$services_title = $services_subtitle = $services_desc = "";
$services_column = 3;
$services_title = esc_attr(get_theme_mod( 'services_title', __( 'Our Services', 'txo' )));
$services_subtitle = esc_attr(get_theme_mod( 'services_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));

$services_bg_image = esc_url(get_theme_mod( 'services_bg_image', TX_ONEPAGER_URL . 'images/bgs/laptop-1209008.jpg' ));
$services_bg_repeat = esc_attr(get_theme_mod( 'services_bg_repeat', 'repeat' ));
$services_bg_attach = esc_attr(get_theme_mod( 'services_bg_attach', 'fixed' ));
$services_bg_size = esc_attr(get_theme_mod( 'services_bg_size', 'auto' ));
$services_bg_position = esc_attr(get_theme_mod( 'services_bg_position', 'left top' ));
$services_bg_color = esc_attr(get_theme_mod( 'services_bg_color', 'rgb(229, 126, 38)' ));
$services_overlay_color = esc_attr(get_theme_mod( 'services_overlay_color', 'rgba(229, 126, 38, 0.95)' ));
$services_fullwidth = esc_attr(get_theme_mod( 'services_fullwidth', 1 ));
$services_parallax = esc_attr(get_theme_mod( 'services_parallax', 1 ));


$section_style = '';

if( $services_parallax == 0 ) {
	$section_style .= 'background-image : url('. $services_bg_image . '); ';
}
$section_style .= 'background-repeat : '. $services_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $services_bg_attach . '; ';
$section_style .= 'background-size : '. $services_bg_size . '; ';
$section_style .= 'background-position : '. $services_bg_position . '; ';
$section_style .= 'background-color : '. $services_bg_color . ';';

$services_title_color = esc_attr(get_theme_mod( 'services_title_color', '#FFFFFF' ));
$services_subtitle_color = esc_attr(get_theme_mod( 'services_subtitle_color', '#FFFFFF' ));
$services_text_color = esc_attr(get_theme_mod( 'services_text_color', '#FFFFFF' ));

$section_fullwidth = '';

if( $services_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$services_column = get_theme_mod( 'services_column', '3' );

$services1_title = esc_attr(get_theme_mod( 'services1_title', __('Web Designing', 'txo' ) ));
$services1_icon = esc_attr(get_theme_mod( 'services1_icon', 'fa-star' ));
$services1_desc = esc_attr(get_theme_mod( 'services1_desc', __('Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' ) ));
//$services1_desc = wp_kses(get_theme_mod( 'services1_desc', __( 'Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' )), $txo_allowed_html);

$services2_title = esc_attr(get_theme_mod( 'services2_title', __('Web Development', 'txo' ) ));
$services2_icon = esc_attr(get_theme_mod( 'services2_icon', 'fa-user' ));
$services2_desc = esc_attr(get_theme_mod( 'services2_desc', __('Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' ) ));
//$services2_desc = wp_kses(get_theme_mod( 'services2_desc', __( 'Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' )), $txo_allowed_html);

$services3_title = esc_attr(get_theme_mod( 'services3_title', __('App Development', 'txo' ) ));
$services3_icon = esc_attr(get_theme_mod( 'services3_icon', 'fa-power-off' ));
$services3_desc = esc_attr(get_theme_mod( 'services3_desc', __('Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' ) ));
//$services3_desc = wp_kses(get_theme_mod( 'services3_desc', __( 'Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' )), $txo_allowed_html);

$services4_title = esc_attr(get_theme_mod( 'services4_title', '' ));
$services4_icon = esc_attr(get_theme_mod( 'services4_icon', '' ));
$services4_desc = esc_attr(get_theme_mod( 'services4_desc', '' ));
//$services4_desc = wp_kses(get_theme_mod( 'services4_desc', '' ), $txo_allowed_html);
	
?>
<section id="services" class="txsec-services">

    <div class="shortcut-wrap">
        
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
            <span class="editcontent"><?php _e( 'Contents', 'txo' ) ?></span>            
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=services_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=services_options' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[panel]=services' ); ?>" class="editcontent"><?php _e( 'Content', 'txo' ) ?></a>                
            </div>
        <?php }?>
	</div>

    <div class="services_inner">
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
    	<?php if( $services_parallax == 0 ) { ?>        
        	<div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
            <div class="tx-fw-overlay" style="background-color: <?php echo $services_overlay_color; ?> ;"> 
        <?php } else { ?>
        	<div class="tx-fw-inner parallax-container" style="" data-bleed="120" data-parallax="scroll" data-z-index="1" data-image-src="<?php echo $services_bg_image; ?>" data-overlay="<?php echo $services_overlay_color; ?>">	
            <div class="tx-fw-overlay" style="background: transparent;"> 
        <?php }?>        
               
        <div class="tx-fw-content" style="color: <?php echo $services_text_color; ?>;">
            <h2 class="services-title" style="color: <?php echo $services_title_color; ?>;"><?php echo $services_title; ?></h2>
            <h3 class="services-subtitle" style="color: <?php echo $services_subtitle_color; ?>;"><?php echo $services_subtitle; ?></h3>
            
			<!-- Services -->
            <?php if( !empty($services1_title) ) { ?>
            <div class="tx-column tx-column-size-1-<?php echo $services_column; ?>">
                <div class="tx-service curved" style="">
                    <div class="tx-service-icon"><span><i class="fa <?php echo $services1_icon; ?>"></i></span></div>
                    <div class="tx-service-title"><?php echo $services1_title; ?></div>
                    <div class="tx-service-text">
                        <?php echo $services1_desc; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if( !empty($services2_title) ) { ?>            
            <div class="tx-column tx-column-size-1-<?php echo $services_column; ?>">
                <div class="tx-service curved" style="">
                    <div class="tx-service-icon"><span><i class="fa <?php echo $services2_icon; ?>"></i></span></div>
                    <div class="tx-service-title"><?php echo $services2_title; ?></div>
                    <div class="tx-service-text">
                        <?php echo $services2_desc; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if( !empty($services3_title) ) { ?>        
            <div class="tx-column tx-column-size-1-<?php echo $services_column; ?>">
                <div class="tx-service curved" style="">
                    <div class="tx-service-icon"><span><i class="fa <?php echo $services3_icon; ?>"></i></span></div>
                    <div class="tx-service-title"><?php echo $services3_title; ?></div>
                    <div class="tx-service-text">
                        <?php echo $services3_desc; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if( !empty($services4_title) ) { ?>        
            <div class="tx-column tx-column-size-1-<?php echo $services_column; ?>">
                <div class="tx-service curved" style="">
                    <div class="tx-service-icon"><span><i class="fa <?php echo $services4_icon; ?>"></i></span></div>
                    <div class="tx-service-title"><?php echo $services4_title; ?></div>
                    <div class="tx-service-text">
                        <?php echo $services4_desc; ?>
                    </div>
                </div>
            </div>
            <?php } ?>            
			<!-- /Services -->
            
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/service section-->

