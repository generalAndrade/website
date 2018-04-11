<?php
/**
 * Default theme options.
 *
 * @package Interserver Platinum
 */


if ( ! function_exists( 'interserver_platinum_get_default_theme_options' ) ) :
	/**
	 * Get default theme options
	 *
	 * @since 1.0.0
	 *
	 * @return array default theme options.
	 */
	function interserver_platinum_get_default_theme_options() {
		$ip_defaults = array();
		
		/*======== Header Options ========*/
		// Header Top Bar
		$ip_defaults['hide_header_topbar'] = '0';
		$ip_defaults['null'] = null;
		$ip_defaults['contact_no'] = '1234-567-89';
		$ip_defaults['contact_email'] = 'example@example.com';
		
		// Header Type
		$ip_defaults['front_header_type'] = 'slider';
		$ip_defaults['site_header_type'] = 'image';
		
		// Header Slider
		$ip_defaults['hide_slider_caption'] = '0';
		$ip_defaults['slider_height'] = 'full';
		$ip_defaults['slider_custom_height'] = '500';

		$ip_defaults['slider_image_1'] = get_template_directory_uri() . '/images/1.jpg';
		$ip_defaults['slider_image_2'] = get_template_directory_uri() . '/images/2.jpg';
		$ip_defaults['slider_image_3'] = '';
		$ip_defaults['slider_image_4'] = '';
		$ip_defaults['slider_image_5'] = ''; 
		
		$ip_defaults['slider_title_1'] = __('Welcome to Interserver Platinum','interserver-platinum');
		$ip_defaults['slider_title_2'] = __('Welcome to Interserver Platinum','interserver-platinum');
		$ip_defaults['slider_title_3'] = '';
		$ip_defaults['slider_title_4'] = '';
		$ip_defaults['slider_title_5'] = '';
 		
		$ip_defaults['slider_subtitle_1'] = __('Feel free to look around','interserver-platinum');
		$ip_defaults['slider_subtitle_2'] = __('Feel free to look around','interserver-platinum');
		$ip_defaults['slider_subtitle_3'] = '';
		$ip_defaults['slider_subtitle_4'] = '';
		$ip_defaults['slider_subtitle_5'] = '';
		
		$ip_defaults['cta_button_text'] = __('Click to begin','interserver-platinum');
		$ip_defaults['cta_button_url'] = '#primary';
		
		// Header Image
		$ip_defaults['header_bg_style'] = 'cover';
		$ip_defaults['header_height'] = '300';
		$ip_defaults['hide_overlay'] = '0';
	
		//Menu Styles
		$ip_defaults['sticky_header'] = 'sticky';
		$ip_defaults['header_alignment'] = 'inline';
		
 		/*======== Blog Options ========*/
		//Layout
		$ip_defaults['blog_layout'] = 'classic';
		//Content/Excerpts
		$ip_defaults['fullwidth_single'] = '0';	
		$ip_defaults['full_content_home'] = '0';
		$ip_defaults['full_content_archives'] = '0';
		$ip_defaults['excerpt_length'] = '55';
		//Meta
		$ip_defaults['hide_meta_index'] = '0';
		$ip_defaults['hide_meta_single'] = '0';
		// Featured Images
		$ip_defaults['index_feat_image'] = '0';
		$ip_defaults['post_feat_image'] = '0';
	
		/*======== Fonts ========*/
		// Body Fonts
		$ip_defaults['body_font_name'] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
		$ip_defaults['body_font_family'] = '\'Lato\', sans-serif';
		
		// Heading Fonts
		$ip_defaults['headings_font_name'] = 'Raleway:400,500,600';
		$ip_defaults['headings_font_family'] = '\'Raleway\', sans-serif';
		
		// Font Sizes
		$ip_defaults['site_title_size'] = '32';
		$ip_defaults['site_desc_size'] = '16';
		$ip_defaults['menu_size'] = '14';
		$ip_defaults['h1_size'] = '44';
		$ip_defaults['h2_size'] = '38';
		$ip_defaults['h3_size'] = '32';
		$ip_defaults['h4_size'] = '26';
		$ip_defaults['h5_size'] = '22';
		$ip_defaults['h6_size'] = '18';
		$ip_defaults['body_size'] = '15';
		
		/*======== Colors ========*/
		// Primary Color
		$ip_defaults['primary_color'] = '#0057be';
		// Secondary Color
		$ip_defaults['secondary_color'] = '#dd3333';
		// Body Text Color
		$ip_defaults['body_text_color'] = '#454545';
		// Header Top Background Color
		$ip_defaults['header_top_bg'] = '#1c1c1c';
		// Header Background Color
		$ip_defaults['header_bg_color'] = '#000000';
		// Site Title Color
		$ip_defaults['site_title_color'] = '#ffffff';
		// Site Description Color
		$ip_defaults['site_desc_color'] = '#ffffff';
		// Menu Items Color
		$ip_defaults['menu_color'] = '#dddddd';
		// Menu Items Hover Color
		$ip_defaults['menu_hover_color'] = '#fec42b';
		// SubMenu Items Color
		$ip_defaults['submenu_color'] = '#ffffff';
		// Mobile Menu Button Color
		$ip_defaults['mobile_menu_color'] = '#ffffff';
		// Mobile Menu Items Background Color
		$ip_defaults['mobile_menu_bg'] = '#1c1c1c';
		// Mobile SubMenu Items Background Color
		$ip_defaults['mobile_submenu_bg'] =  '#333333';
		// Slider Text color
		$ip_defaults['slider_text_color'] = '#ffffff';	
		
		// Widgetized Footer Background Color
		$ip_defaults['footer_widgets_background'] = '#151515';

		// Footer Background Color
		$ip_defaults['footer_background'] = '#242424';
		// Footer Widgets Title Color
		$ip_defaults['fw_title_color'] = '#ffffff';
		// Footer Text Color
		$ip_defaults['footer_text_color'] = '#ffffff';
		// Footer Text Hover Color
		$ip_defaults['footer_text_hover'] = '#ff0000';
		// Sidebar Background Color
		$ip_defaults['sidebar_background'] = '#ffffff';
		// Sidebar Widget Title Color
		$ip_defaults['sw_title_color'] = '#0057be';
		// Sidebar Text Color
		$ip_defaults['sidebar_text_color'] = '#767676';
			
		/*======== Footer ========*/		
		// No. of Footer Widgets to display
		$ip_defaults['footer_widgets'] = 4;
		// Footer Copyright
		$ip_defaults['footer_copyright'] = esc_html__( 'Copyright &copy; All rights reserved.', 'interserver-platinum');
		
		// Pass through filter.
		$ip_defaults = apply_filters('interserver_platinum_filter_default_theme_options', $ip_defaults );
		return $ip_defaults;
	}
endif;

$ip_default = interserver_platinum_get_default_theme_options();

