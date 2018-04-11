<!--calltoact section-->
<?php
$calltoact_title = $calltoact_subtitle = $calltoact_desc = "";
$calltoact_title = esc_attr(get_theme_mod( 'calltoact_title', __( 'I-ONE, The One Page Business WordPress Theme', 'txo' )));
$calltoact_subtitle = esc_attr(get_theme_mod( 'calltoact_subtitle', __( 'TemplatesNext, The Next Generation Media Development Company', 'txo' )));
$calltoact_button = esc_attr(get_theme_mod( 'calltoact_button', __( 'Know More', 'txo' )));
$calltoact_url = esc_url(get_theme_mod( 'calltoact_url', __( 'http://www.google.com', 'txo' )));

$calltoact_bg_image = esc_url(get_theme_mod( 'calltoact_bg_image', '' ));
$calltoact_bg_repeat = esc_attr(get_theme_mod( 'calltoact_bg_repeat', 'repeat' ));
$calltoact_bg_attach = esc_attr(get_theme_mod( 'calltoact_bg_attach', 'fixed' ));
$calltoact_bg_size = esc_attr(get_theme_mod( 'calltoact_bg_size', 'auto' ));
$calltoact_bg_position = esc_attr(get_theme_mod( 'calltoact_bg_position', 'left top' ));
$calltoact_text_color = esc_attr(get_theme_mod( 'calltoact_text_color', '#FFFFFF' ));
$calltoact_bg_color = esc_attr(get_theme_mod( 'calltoact_bg_color', 'rgba(227, 119, 33, 1)' ));
$calltoact_overlay_color = esc_attr(get_theme_mod( 'calltoact_overlay_color', 'rgba(227, 119, 33, 0.0)' ));
$calltoact_fullwidth = esc_attr(get_theme_mod( 'calltoact_fullwidth', 1 ));

$section_style = '';

$section_style .= 'background-image : url('. $calltoact_bg_image . '); ';
$section_style .= 'background-repeat : '. $calltoact_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $calltoact_bg_attach . '; ';
$section_style .= 'background-size : '. $calltoact_bg_size . '; ';
$section_style .= 'background-position : '. $calltoact_bg_position . '; ';
$section_style .= 'color : '. $calltoact_text_color . '; ';
$section_style .= 'background-color : '. $calltoact_bg_color . ';';


$section_fullwidth = '';

if( $calltoact_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}
	
?>
<section id="calltoact" class="txsec-calltoact">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=calltoact' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="calltoact_inner">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $calltoact_overlay_color; ?> ;">        
        <div class="tx-fw-content">
        	<div class="txo-cta">
                <h2 class="calltoact-title"><?php echo $calltoact_title; ?></h2>
                <h3 class="calltoact-subtitle"><?php echo $calltoact_subtitle; ?></h3>
            </div>
            <div class="calltoact-desc">
            	<a href="<?php echo $calltoact_url; ?>" target="_blank" class="cta-button ibutton" style="background-color: #fff; padding: 16px 24px; border-radius: 3px;">
					<?php echo $calltoact_button; ?>
                </a>
            </div> 
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/calltoact section-->

