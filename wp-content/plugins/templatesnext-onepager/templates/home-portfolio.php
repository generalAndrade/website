<!--portfolio section-->
<?php
$portfolios_title = $portfolio_subtitle = $portfolio_desc = "";
	
$portfolios_title = esc_attr(get_theme_mod( 'portfolios_title', __( 'Recent Works', 'txo' )));
$portfolio_subtitle = esc_attr(get_theme_mod( 'portfolio_subtitle', __( 'Browse some of our recent works', 'txo' )));

$portfolio_bg_image = esc_url(get_theme_mod( 'portfolio_bg_image', '' ));
$portfolio_bg_repeat = esc_attr(get_theme_mod( 'portfolio_bg_repeat', 'repeat' ));
$portfolio_bg_attach = esc_attr(get_theme_mod( 'portfolio_bg_attach', 'fixed' ));
$portfolio_bg_size = esc_attr(get_theme_mod( 'portfolio_bg_size', 'auto' ));
$portfolio_bg_position = esc_attr(get_theme_mod( 'portfolio_bg_position', 'left top' ));
$portfolio_bg_color = esc_attr(get_theme_mod( 'portfolio_bg_color', 'rgba(255, 255, 255, 1)' ));
$portfolio_overlay_color = esc_attr(get_theme_mod( 'portfolio_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$portfolio_fullwidth = esc_attr(get_theme_mod( 'portfolio_fullwidth', 1 ));

$portfolio_title_color = esc_attr(get_theme_mod( 'portfolio_title_color', '#484848' ));
$portfolio_subtitle_color = esc_attr(get_theme_mod( 'portfolio_subtitle_color', '#595959' ));

$portfolio_column = esc_attr(get_theme_mod( 'portfolio_column', '4' ));

$section_style = '';

$section_style .= 'background-image : url('. $portfolio_bg_image . '); ';
$section_style .= 'background-repeat : '. $portfolio_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $portfolio_bg_attach . '; ';
$section_style .= 'background-size : '. $portfolio_bg_size . '; ';
$section_style .= 'background-position : '. $portfolio_bg_position . '; ';
$section_style .= 'background-color : '. $portfolio_bg_color . ';';

$section_fullwidth = '';

if( $portfolio_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$portfolio_preset = array (
    array(
        'portfolio_title' => 'Aquatic Infrastructure',
        'portfolio_category' => 'Photoshop',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio1.png',
    ),
    array(
        'portfolio_title' => 'Templates Next Digital Media',
        'portfolio_category' => 'Illustrator',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio2.png',
    ),
    array(
        'portfolio_title' => 'Jhon & Jenny',
        'portfolio_category' => 'Web Development',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio3.png',
    ),
    array(
        'portfolio_title' => 'Go Media',
        'portfolio_category' => 'Web Design',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio4.png',
    ),
    array(
        'portfolio_title' => 'Austin West',
        'portfolio_category' => 'Illustrator',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio5.png',
    ),
    array(
        'portfolio_title' => 'Leo Burnett Ltd',
        'portfolio_category' => 'Web development',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio6.png',
    ),
    array(
        'portfolio_title' => 'Koncept Media',
        'portfolio_category' => 'Web Development',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio7.png',
    ),
    array(
        'portfolio_title' => 'The Craft House',
        'portfolio_category' => 'Web Design',
        'portfolio_url' => 'http://www.google.com',
        'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio8.png',
    ),	
	
	
);

$portfolios = get_theme_mod('txo_portfolio', $portfolio_preset);
$portfolio_loop = "";
$portfolio_no = 0;
$template_dir = TX_ONEPAGER_URL;

foreach( $portfolios as $portfolio ) {
	If ( $portfolio_no <= 8 ) {
		
		$portfolio_title = esc_attr($portfolio['portfolio_title']);
		$portfolio_category = esc_attr($portfolio['portfolio_category']);
		$portfolio_url = esc_url($portfolio['portfolio_url']);
		$portfolio_image = esc_attr($portfolio['portfolio_image']);
		
		if ( false !== strpos( $portfolio_image, $template_dir ) ) {
			$portfolio_image_url = $portfolio_image;
		} else
		{
			$portfolio_image_url = wp_get_attachment_image_src( $portfolio_image, 'txo-slider-thumb' );
			$portfolio_image_url = $portfolio_image_url[0];
		}
		
		$portfolio_loop .= '<div style="" class="tx-portfolio-item tx-post-col-'.$portfolio_column.'">';
			$portfolio_loop .= '<div class="tx-border-box">';
				$portfolio_loop .= '<div class="tx-folio-img">';
					$portfolio_loop .= '<div class="tx-folio-img-wrap">';
						$portfolio_loop .= '<img src="'.$portfolio_image_url.'" alt="" class="folio-img">';
					$portfolio_loop .= '</div>';
					$portfolio_loop .= '<div class="folio-links">';
						$portfolio_loop .= '<span>';
							if( $portfolio_url != "" ){
								$portfolio_loop .= '<a href="'.$portfolio_url.'" class="folio-linkico"><i class="fa fa-link"></i></a>';
							}							
							$portfolio_loop .= '<a href="'.$portfolio_image_url.'" class="tx-colorbox folio-zoomico"><i class="fa fa-search-plus"></i></a>';
						$portfolio_loop .= '</span>';
					$portfolio_loop .= '</div>';
				$portfolio_loop .= '</div>';
				$portfolio_loop .= '<span class="folio-head">';
					$portfolio_loop .= '<h3 class="tx-folio-title">'.$portfolio_title.'</h3>';
					$portfolio_loop .= '<div class="tx-folio-category">'.$portfolio_category.'</div>';
				$portfolio_loop .= '</span>';
			$portfolio_loop .= '</div>';
		$portfolio_loop .= '</div>';
		
		
		$portfolio_no++;		

	}
}
	
?>
<section id="portfolio" class="txsec-portfolio">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
            <span class="editcontent"><?php _e( 'Contents', 'txo' ) ?></span>            
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=portfolio_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=portfolio_options' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=portfolios' ); ?>" class="editcontent"><?php _e( 'Content', 'txo' ) ?></a>                
            </div>
        <?php }?>
	</div>
    
    <div class="portfolio_inner">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $portfolio_overlay_color; ?> ;">        
        <div class="tx-fw-content">
            <h2 class="portfolio-title" style="color: <?php echo $portfolio_title_color; ?>;"><?php echo $portfolios_title; ?></h2>
            <h3 class="portfolio-subtitle" style="color: <?php echo $portfolio_subtitle_color; ?>;"><?php echo $portfolio_subtitle; ?></h3>
            
            <div style="" class="tx-portfolio tx-post-row tx-masonry folio-style-gallery">            
				<?php echo $portfolio_loop; ?>
                <div class="clear"></div>
            </div>
            
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/service section-->

