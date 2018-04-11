<!--aboutus section-->
<?php
$about_title = $about_subtitle = $about_desc = "";
$about_align = esc_attr(get_theme_mod( 'about_align', 'center'));
$about_title = esc_attr(get_theme_mod( 'aboutus_title', __( 'Welcome To TemplatesNext OnePager', 'txo' )));
$about_subtitle = esc_attr(get_theme_mod( 'aboutus_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));
$about_desc = esc_attr(get_theme_mod( 'aboutus_desc', __( 'Phasellus gravida bibendum adipiscing. Cras id rhoncus diam. Praesent pharetra justo sed velit tempus, non pulvinar tortor tempor. Maecenas elementum consequat orci, eget fermentum erat adipiscing porta. Nunc et lorem eu metus', 'txo' )));

$about_bg_image = esc_url(get_theme_mod( 'about_bg_image', '' ));
$about_bg_repeat = esc_attr(get_theme_mod( 'about_bg_repeat', 'repeat' ));
$about_bg_attach = esc_attr(get_theme_mod( 'about_bg_attach', 'fixed' ));
$about_bg_size = esc_attr(get_theme_mod( 'about_bg_size', 'auto' ));
$about_bg_position = esc_attr(get_theme_mod( 'about_bg_position', 'left top' ));
$about_bg_color = esc_attr(get_theme_mod( 'about_bg_color', 'rgb(255, 255, 255)' ));
$about_overlay_color = esc_attr(get_theme_mod( 'about_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$about_fullwidth = esc_attr(get_theme_mod( 'about_fullwidth', 1 ));

$about_title_color = esc_attr(get_theme_mod( 'aboutus_title_color', '#484848' ));
$about_subtitle_color = esc_attr(get_theme_mod( 'aboutus_subtitle_color', '#595959' ));

$section_style = '';

if( $about_parallax == 0 ) {
	$section_style .= 'background-image : url('. $about_bg_image . '); ';
}
$section_style .= 'background-repeat : '. $about_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $about_bg_attach . '; ';
$section_style .= 'background-size : '. $about_bg_size . '; ';
$section_style .= 'background-position : '. $about_bg_position . '; ';
$section_style .= 'background-color : '. $about_bg_color . ';';

$about_title_color = esc_attr(get_theme_mod( 'aboutus_title_color', '#484848' ));
$about_subtitle_color = esc_attr(get_theme_mod( 'aboutus_subtitle_color', '#595959' ));
$about_text_color = esc_attr(get_theme_mod( 'aboutus_text_color', '#646464' ));

$section_fullwidth = '';

if( $about_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}


?>
<section id="aboutus" class="txsec-aboutus">
    <div class="aboutus_inner" style="text-align: <?php echo $about_align; ?>">
    	
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
            <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
                <div class="tx-fw-overlay" style="background-color: <?php echo $about_overlay_color; ?> ;">        
                    <div class="tx-fw-content" style="color: <?php echo $about_text_color; ?>">
                        <h2 class="about-title" style="color: <?php echo $about_title_color; ?>"><?php echo $about_title; ?></h2>
                        <h3 class="about-subtitle" style="color: <?php echo $about_subtitle_color; ?>"><?php echo $about_subtitle; ?></h3>
                        <div class="about-desc"><?php echo $about_desc; ?></div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>
<!--/aboutus section-->

