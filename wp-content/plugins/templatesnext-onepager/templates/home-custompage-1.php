<!--custompage1 section-->
<?php
$custompage1_title = $custompage1_subtitle = $custompage1_desc = $custompage1_parallax = "";
$custompage1_align = esc_attr(get_theme_mod( 'custompage1_align', 'center'));
$custompage1_title = esc_attr(get_theme_mod( 'custompage1_title', __( 'Welcome To TemplatesNext OnePager', 'txo' )));
$custompage1_subtitle = esc_attr(get_theme_mod( 'custompage1_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));
$custompage1_id = esc_attr(get_theme_mod( 'custompage1_page_id', 2));

$custompage1_bg_image = esc_url(get_theme_mod( 'custompage1_bg_image', '' ));
$custompage1_bg_repeat = esc_attr(get_theme_mod( 'custompage1_bg_repeat', 'repeat' ));
$custompage1_bg_attach = esc_attr(get_theme_mod( 'custompage1_bg_attach', 'fixed' ));
$custompage1_bg_size = esc_attr(get_theme_mod( 'custompage1_bg_size', 'auto' ));
$custompage1_bg_position = esc_attr(get_theme_mod( 'custompage1_bg_position', 'left top' ));
$custompage1_bg_color = esc_attr(get_theme_mod( 'custompage1_bg_color', 'rgb(255, 255, 255)' ));
$custompage1_overlay_color = esc_attr(get_theme_mod( 'custompage1_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$custompage1_fullwidth = esc_attr(get_theme_mod( 'custompage1_fullwidth', 1 ));

$custompage1_title_color = esc_attr(get_theme_mod( 'custompage1_title_color', '#484848' ));
$custompage1_subtitle_color = esc_attr(get_theme_mod( 'custompage1_subtitle_color', '#595959' ));

$section_style = '';
$custompage1_parallax = 0;

if( $custompage1_parallax == 0 ) {
	$section_style .= 'background-image : url('. $custompage1_bg_image . '); ';
}
$section_style .= 'background-repeat : '. $custompage1_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $custompage1_bg_attach . '; ';
$section_style .= 'background-size : '. $custompage1_bg_size . '; ';
$section_style .= 'background-position : '. $custompage1_bg_position . '; ';
$section_style .= 'background-color : '. $custompage1_bg_color . ';';

$custompage1_title_color = esc_attr(get_theme_mod( 'custompage1_title_color', '#484848' ));
$custompage1_subtitle_color = esc_attr(get_theme_mod( 'custompage1_subtitle_color', '#595959' ));
$custompage1_text_color = esc_attr(get_theme_mod( 'custompage1_text_color', '#646464' ));

$section_fullwidth = '';

if( $custompage1_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}


?>
<section id="custompage1" class="txsec-custompage1">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[panel]=custompage1' ); ?>" class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="custompage1_inner" style="text-align: <?php echo $custompage1_align; ?>">
    	
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
            <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
                <div class="tx-fw-overlay" style="background-color: <?php echo $custompage1_overlay_color; ?> ;">        
                    <div class="tx-fw-content" style="color: <?php echo $custompage1_text_color; ?>">
                        <h2 class="custompage1-title" style="color: <?php echo $custompage1_title_color; ?>"><?php echo $custompage1_title; ?></h2>
                        <h3 class="custompage1-subtitle" style="color: <?php echo $custompage1_subtitle_color; ?>"><?php echo $custompage1_subtitle; ?></h3>
                        <div class="custompage1-desc"><?php echo apply_filters('the_content', get_post_field('post_content', $custompage1_id)); ?></div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>
<!--/custompage1 section-->

