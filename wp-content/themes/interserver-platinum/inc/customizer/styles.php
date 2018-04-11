<?php
/**
 * @package Interserver Platinum
 */
 
/* Convert hexdec color string to rgb(a) string */
 function interserver_platinum_hex2rgba($color, $opacity = false) {
 	$def = 'rgb(0,0,0)';
		//Return default if no color provided
		if(empty($color))
          	return $def; 
 		//Sanitize $color if "#" is provided 
        	if ($color[0] == '#' ) {
        		$color = substr( $color, 1 );
       	}
       	//Check if color has 6 or 3 characters and get values
        	if (strlen($color) == 6) {
                	$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        	} elseif ( strlen( $color ) == 3 ) {
                	$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        	} else {
                	return $def;
        }
		$rgb =  array_map('hexdec', $hex);
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        return $output;
 }
 
/* Dynamix style with customizer setting */
function interserver_platinum_custom_styles($custom_css){
	global $ip_default;
	$custom_css ='';
	/*==================== Header ====================*/
	// Header Type
	$front_header = get_theme_mod('front_header_type', $ip_default['front_header_type']);
	$site_header = get_theme_mod('site_header_type', $ip_default['site_header_type']);
	if ($front_header == 'default' && is_front_page() || $site_header == 'default' && !is_front_page()) {
		 $custom_css .= ".site-header{ position:relative; top: 0 !important;}"."\n";
	 }
	//Header Slider 
	$slider_height = get_theme_mod('slider_height', $ip_default['slider_height']);
	$slider_custom_height = get_theme_mod('slider_custom_height', $ip_default['slider_custom_height']);
	if($slider_height != $ip_default['slider_height'] ){
		$custom_css .= ".home_slider .slider-wrapper.theme-default { height:" . intval($slider_custom_height) . "px; }"."\n";
	}
	//Header Image
	$header_bg_style = get_theme_mod('header_bg_style',$ip_default['header_bg_style']);	
	$header_height = get_theme_mod('header_height','300');
	$custom_css .= ".header-image { background-size:" . esc_attr($header_bg_style) . "; height:" . intval($header_height) . "px;}"."\n";

	$custom_css .= "#wp-custom-header-video{ height:" . intval($header_height) . "px;}"."\n";

	// Header Style
	$sticky_header = get_theme_mod('sticky_header',$ip_default['sticky_header']);
	if( $sticky_header != $ip_default['sticky_header'] ){
			$custom_css .= ".site-header.static{ position:fixed; }"."\n";
	}

	/*==================== Fonts ====================*/
	$body_fonts = get_theme_mod('body_font_family', $ip_default['body_font_family']);	
	$headings_fonts = get_theme_mod('headings_font_family', $ip_default['headings_font_family'] );
	if ( $body_fonts !='' ) {
		$custom_css .= "body, #cssmenu ul ul a { font-family:" . esc_attr($body_fonts) . "!important;}"."\n";
	}
	if ( $headings_fonts !='' ) {
		$custom_css .= "h1, h2, h3, h4, h5, h6, #cssmenu ul li a, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"],.nivoSlider .nivo-caption { font-family:" . esc_attr($headings_fonts) . ";}"."\n";
	}
    //Site title
    $site_title_size = get_theme_mod( 'site_title_size', $ip_default['site_title_size'] );
    if ($site_title_size) {
        $custom_css .= ".site-title { font-size:" . intval($site_title_size) . "px; }"."\n";
    }
    //Site description
    $site_desc_size = get_theme_mod( 'site_desc_size', $ip_default['site_desc_size'] );
    if ($site_desc_size) {
        $custom_css .= ".site-description { font-size:" . intval($site_desc_size) . "px; }"."\n";
    }
    //Menu
    $menu_size = get_theme_mod( 'menu_size',  $ip_default['menu_size'] );
    if ($menu_size) {
        $custom_css .= "#cssmenu ul li a { font-size:" . intval($menu_size) . "px; }"."\n";
    }    	    	
	//H1 size
	$h1_size = get_theme_mod( 'h1_size', $ip_default['h1_size'] );
	if ($h1_size) {
		$custom_css .= "h1{ font-size:" . intval($h1_size) . "px; }"."\n";
	}
    //H2 size
    $h2_size = get_theme_mod( 'h2_size', $ip_default['h2_size'] );
    if ($h2_size) {
        $custom_css .= "h2{ font-size:" . intval($h2_size) . "px; }"."\n";
    }
    //H3 size
    $h3_size = get_theme_mod( 'h3_size', $ip_default['h3_size'] );
    if ($h3_size) {
        $custom_css .= "h3{ font-size:" . intval($h3_size) . "px; }"."\n";
    }
    //H4 size
    $h4_size = get_theme_mod( 'h4_size', $ip_default['h4_size'] );
    if ($h4_size) {
        $custom_css .= "h4{ font-size:" . intval($h4_size) . "px; }"."\n";
    }
    //H5 size
    $h5_size = get_theme_mod( 'h5_size', $ip_default['h5_size'] );
    if ($h5_size) {
        $custom_css .= "h5{ font-size:" . intval($h5_size) . "px; }"."\n";
    }
    //H6 size
    $h6_size = get_theme_mod( 'h6_size', $ip_default['h6_size'] );
    if ($h6_size) {
        $custom_css .= "h6{ font-size:" . intval($h6_size) . "px; }"."\n";
    }
    //Body size
    $body_size = get_theme_mod( 'body_size', $ip_default['body_size'] );
    if ($body_size) {
        $custom_css .= "body { font-size:" . intval($body_size) . "px;}"."\n";
    }
	
	
	/*==================== Colors ====================*/
	// Primary color
	$primary_color = get_theme_mod( 'primary_color', $ip_default['primary_color']);
	if($primary_color){
		$custom_css .= " input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"],.slide-inner .cta-button:hover,#btn-scrollup:hover{ background-color:" . esc_attr($primary_color) . "}"."\n";
		$custom_css .= ".so-widget-sow-button .ow-button-base .ow-button-hover {background:" . esc_attr($primary_color) . "}"."\n";
		$custom_css .= "#content .so-widget-sow-button .ow-button-base .ow-button-hover {border-color:" . esc_attr($primary_color) . ";}"."\n";
	
		// Woocommerce
		$custom_css .=".checkout h3,.woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active {color:" . esc_attr($primary_color) . "}"."\n";
		$custom_css .= ".woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li,.single-product .product .single_add_to_cart_button.button,.woocommerce .product .add_to_cart_button.button { background-color:" . esc_attr($primary_color) . "}"."\n";

	}

	// Secondary color
	$secondary_color = get_theme_mod( 'secondary_color', $ip_default['secondary_color']);
	if($secondary_color){
		$custom_css .="body a:hover, #secondary a:hover, .meta-post, .hentry .meta-post a:hover,.widget-area .widget ul li::before { color:" . esc_attr($secondary_color) . "}"."\n";
		$custom_css .=".nav-links a {border: 2px solid " . esc_attr($secondary_color). " }"."\n";
		$custom_css .="input[type=\"button\"]:hover, input[type=\"reset\"]:hover, input[type=\"submit\"]:hover,.slide-inner .cta-button,.nav-links a:hover,.ip-loader{ background-color: " . esc_attr($secondary_color). " }"."\n";
		$custom_css .= "#content .so-widget-sow-button .ow-button-base .ow-button-hover:hover {background:" . esc_attr($secondary_color) . ";}"."\n";
		$custom_css .= "#content .so-widget-sow-button .ow-button-base .ow-button-hover:hover {border-color:" . esc_attr($secondary_color) . ";}"."\n";


		// Woocommerce
		$custom_css .=".woocommerce-info a { color:" . esc_attr($secondary_color) . "}"."\n";
		$custom_css .= "table.shop_table.cart thead, #btn-scrollup,.woocommerce span.onsale,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit[disabled]:disabled:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button[disabled]:disabled:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button[disabled]:disabled:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button[disabled]:disabled:hover.single-product .product .single_add_to_cart_button.button:hover,.woocommerce .product .add_to_cart_button.button:hover {background-color: " . esc_attr($secondary_color). " }"."\n";
	}

	//Body
	$body_text = get_theme_mod( 'body_text_color', $ip_default['body_text_color'] );
	if ($body_text) {
		$custom_css .= "body,.page-title a { color:" . esc_attr($body_text) . "}"."\n";
	}
	// Header Top Background Color
	$header_top_bg = get_theme_mod( 'header_top_bg', $ip_default['header_top_bg'] );
	if ($header_top_bg) {
		$custom_css .= ".header-top-wrapper { background-color:" . esc_attr($header_top_bg) . "}"."\n";
	}

	// Header Background Color
	$header_bg_color = get_theme_mod( 'header_bg_color', $ip_default['header_bg_color'] );
	$hbcrgba_1 = interserver_platinum_hex2rgba($header_bg_color, 0.3);
	$hbcrgba_2 = interserver_platinum_hex2rgba($header_bg_color, 1);
	if ($header_bg_color) {
		$custom_css .= ".site-header { background-color:" . esc_attr($hbcrgba_1) . "}"."\n"; 
		$custom_css .= ".site-header.sticky.fixed{ background-color:" . esc_attr($hbcrgba_2) . "}"."\n"; 
	}
	//Site title
	$site_title_color = get_theme_mod( 'site_title_color', $ip_default['site_title_color'] );
		$custom_css .= ".site-title a, .site-title a:hover { color:" . esc_attr($site_title_color) . "}"."\n";

	//Site desc
	$site_desc = get_theme_mod( 'site_desc_color', $ip_default['site_desc_color'] );
	if ($site_desc) {
		$custom_css .= ".site-description { color:" . esc_attr($site_desc) . "}"."\n";
	}
	//Menu items color
	$menu_color = get_theme_mod( 'menu_color', $ip_default['menu_color'] );
	if ($menu_color) {
		$custom_css .= "#cssmenu ul li a, .header-info,.header-info a {color:" . esc_attr($menu_color).";}"."\n";
	}
	//Menu items hover
	$menu_hover_color = get_theme_mod( 'menu_hover_color', $ip_default['menu_hover_color'] );
	if ($menu_hover_color) {
		$custom_css .= "#cssmenu ul li a:hover,.header-info a:hover { color:" . esc_attr($menu_hover_color) . "}"."\n";	
	}
	//Sub menu items color
	$submenu_color = get_theme_mod( 'submenu_color', $ip_default['submenu_color'] );
	if ($submenu_color) {
		$custom_css .= "#cssmenu .sub-menu li a, #cssmenu .children li a { color:" . esc_attr($submenu_color) . "}"."\n";
	}
	//Mobile menu icon
	$mobile_menu_color = get_theme_mod( 'mobile_menu_color', $ip_default['mobile_menu_color']);
	if ($mobile_menu_color) {
		$custom_css .= ".btn-menu { color:" . esc_attr($mobile_menu_color) . "}"."\n";
	}
	//Mobile Menu background
	$mobile_menu_bg = get_theme_mod( 'mobile_menu_bg',$ip_default['mobile_menu_bg']);
	if ($mobile_menu_bg) {
		
	}
	// Mobile Submenu background
	$mobile_submenu_bg = get_theme_mod( 'mobile_submenu_bg', $ip_default['mobile_submenu_bg'] );
	if ($mobile_submenu_bg) {
	$msmbg_rgba = interserver_platinum_hex2rgba($mobile_submenu_bg, 0.9);
	}
	//Footer widget area background
	$fw_background = get_theme_mod( 'footer_widgets_background', $ip_default['footer_widgets_background'] );
	if ($fw_background) {
		$custom_css .= ".footer-widgets { background-color:" . esc_attr($fw_background) . "}"."\n";	
	}
	//Footer widget title color
	$fw_title_color = get_theme_mod( 'fw_title_color', $ip_default['fw_title_color'] );
	if ($fw_title_color) {
		$custom_css .= "#sidebar-footer,#sidebar-footer a,.footer-widgets .widget-title {color:" . esc_attr($fw_title_color) . "}"."\n";
	}
	//Footer background
	$footer_background = get_theme_mod( 'footer_background', $ip_default['footer_background'] );
	if ($footer_background) {
		$custom_css .= ".site-footer{ background-color:" . esc_attr($footer_background) . "}"."\n";	
	}
	//Footer color
	$footer_text_color = get_theme_mod( 'footer_text_color', $ip_default['footer_text_color'] );
	if ($footer_text_color) {
		$custom_css .= ".footer-bottom,.site-footer a,.footer-widgets,.footer-widgets a { color:" . esc_attr($footer_text_color) . "}"."\n";	
	}
	//Footer hover color
	$footer_text_hover = get_theme_mod( 'footer_text_hover', $ip_default['footer_text_hover'] );
	if ($footer_text_hover) {
		$custom_css .= ".site-footer a:hover,.footer-widgets a:hover { color:" . esc_attr($footer_text_hover) . "}"."\n";	
	}
	//Sidebar background
	$sidebar_background = get_theme_mod( 'sidebar_background', $ip_default['sidebar_background'] );
	if ($sidebar_background) {
		$custom_css .= "#secondary{ background-color::" . esc_attr($sidebar_background) . "}"."\n";	
	}
	//Sidebar widget title color
	$sw_title_color = get_theme_mod( 'sw_title_color', $ip_default['sw_title_color'] );
	if ($sw_title_color) {
		$custom_css .= "#secondary .widget-title{ color:" . esc_attr($sw_title_color) . "}"."\n";	
	}
	//Sidebar color
	$sidebar_text_color = get_theme_mod( 'sidebar_text_color', $ip_default['sidebar_text_color']);
	if ($sidebar_text_color) {
		$custom_css .= "#secondary, #secondary a{ color:" . esc_attr($sidebar_text_color) . "}"."\n";	
	}
	// Slider Text color
	$slider_text_color = get_theme_mod( 'slider_text_color',$ip_default['slider_text_color']);
	if ($slider_text_color) {
		$custom_css .= ".nivo-caption .maintitle,.nivo-caption .subtitle { color:" . esc_attr($slider_text_color) . "}"."\n";	
	}
    ?>
	<style type="text/css">
	<?php echo $custom_css;?>
	</style>
    <?php }
add_action( 'wp_head', 'interserver_platinum_custom_styles' );