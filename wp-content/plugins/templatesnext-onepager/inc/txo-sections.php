<?php 
/* All Section display related Functions */

/* setting up global variable for allowed HTML codes */

//global $txo_allowed_html;

$txo_allowed_html = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
        'class' => array()		
    ),
    'br' => array(),
    'div' => array(
        'style' => array(),
        'class' => array(),
		'id' => array(),
    ),
    'h1' => array(),
    'h2' => array(),
    'h3' => array(),
    'h4' => array(),	
    'span' => array(),
    'ul' => array(
        'style' => array(),
        'class' => array(),
		'id' => array(),
    ),
    'li' => array(
        'style' => array(),
        'class' => array(),
		'id' => array(),
    ),
    'img' => array(
        'src' => array(),
        'height' => array(),
		'width' => array(),
		'class' => array(),
		'style' => array(),
		'alt' => array(),
    ),			
		
);

function txo_sections_show() {
	//$sections_preset = array("aboutus", "services", "portfolio", "blog", "video", "testimonials", "calltoact", "pricing", "team", "contact", "parallax-1", "custompage-1", "pie");
	$sections_preset = array("aboutus", "services", "portfolio", "blog", "team", "calltoact", "testimonials", "contact");
	$nx_sections = get_theme_mod( 'nx_sections', $sections_preset);
	
	foreach ($nx_sections as $section) {
		include( TX_ONEPAGER_PATH . 'templates/home-'.$section.'.php' );
	}
}

add_action('admin_init', 'txo_admin_css');
function txo_admin_css() {
   wp_register_style( 'txo-admin-css', TX_ONEPAGER_URL . 'css/txo-admin-style.css' );
   wp_enqueue_style( 'txo-admin-css' );
}

add_action( 'admin_enqueue_scripts', 'txo_admin_js' );
function txo_admin_js() {
    wp_enqueue_script( 'txo_admin_script', TX_ONEPAGER_URL . 'js/txo-admin-script.js' );
}



function txo_home_scripts_styles() {
	
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', false, '4.1.0', 'all' );	
	//wp_enqueue_style( 'onepage-scroll', TX_ONEPAGER_URL . 'css/onepage-scroll.css', false, '1.0.0', 'all' );	
	wp_enqueue_style( 'section-style', TX_ONEPAGER_URL . 'css/section-style.css', array(), '1.01' );

	wp_enqueue_script( 'jquery-masonry' );
	wp_enqueue_script( 'parallax', TX_ONEPAGER_URL . 'js/parallax.js', array( 'jquery' ), '1.5.14', true );
	//wp_enqueue_script( 'parallax-background', TX_ONEPAGER_URL . 'js/parallax-background.min.js', array( 'jquery' ), '1.5.14', true );	
	//wp_enqueue_script( 'onepage-scroll', TX_ONEPAGER_URL . 'js/jquery.onepage-scroll.min.js', array( 'jquery' ), '1.0.0', true );	
	wp_enqueue_script( 'waypoint', TX_ONEPAGER_URL . '/js/waypoints.min.js', array( 'jquery' ), '2014-01-13', true );	
	wp_enqueue_script( 'circle-progress', TX_ONEPAGER_URL . 'js/circle-progress.min.js', array( 'jquery' ), '1.2.0', true );
	wp_enqueue_script( 'section-script', TX_ONEPAGER_URL . 'js/section-script.js', array(), '2013-07-18', true );
	
	wp_enqueue_script( 'form', '//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js', array( 'jquery' ), '1.0.0', true );	
	wp_enqueue_script( 'validate', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js', array( 'jquery' ), '1.0.0', true );	
   	wp_enqueue_script( 'txo-ajax', TX_ONEPAGER_URL . 'js/ajax-script.js', array(), '2013-07-18', true );	
}
add_action( 'wp_enqueue_scripts', 'txo_home_scripts_styles' );

if (!function_exists('tx_scripts_styles')) {
	function txo_onepager_scripts_styles() {
		wp_enqueue_style( 'owl-carousel', TX_ONEPAGER_URL .  'css/tx/owl.carousel.css', false, '1.3.2', 'all' );
		wp_enqueue_style( 'owl-carousel-transitions', TX_ONEPAGER_URL . 'css/tx/owl.transitions.css', false, '1.3.2', 'all' );		
		wp_enqueue_style( 'animate', TX_ONEPAGER_URL . 'css/tx/animate.css', false, '3.5.1', 'all'  );		
		wp_enqueue_style( 'colorbox', TX_ONEPAGER_URL . 'css/tx/colorbox.css', false, '1.5.14', 'all' );			
		wp_enqueue_style( 'tx-style', TX_ONEPAGER_URL . 'css/tx/tx-style.css', array(), '1.01' );		
	
		wp_enqueue_script( 'owl-carousel', TX_ONEPAGER_URL . 'js/tx/owl.carousel.min.js', array( 'jquery' ), '1.3.2', true );
		wp_enqueue_script( 'colorbox', TX_ONEPAGER_URL . 'js/tx/jquery.colorbox-min.js', array( 'jquery' ), '1.5.14', true );				
		wp_enqueue_script( 'inview', TX_ONEPAGER_URL . 'js/tx/jquery.inview.min.js', array( 'jquery' ), '1.0.0', true );	
		wp_enqueue_script( 'tx-script', TX_ONEPAGER_URL . 'js/tx/tx-script.js', array(), '2013-07-18', true );
	}
	add_action( 'wp_enqueue_scripts', 'txo_onepager_scripts_styles' );
}

/**/
function txo_customizer_live_preview() {
    wp_enqueue_script('txo-customizer', TX_ONEPAGER_URL . 'js/txo-customizer.js', array( 'jquery','customize-preview' ), '1.0.1', true ); 
}
add_action( 'customize_preview_init', 'txo_customizer_live_preview' );

function txo_customizer_live_control() {
    wp_enqueue_script('txo-customizer-control', TX_ONEPAGER_URL . 'js/txo-customizer-control.js', array( 'jquery' ), '1.0.1', true ); 
}
add_action( 'customize_controls_enqueue_scripts', 'txo_customizer_live_control' );


/*
* Adding Active section menus
*/

if ( !function_exists('tx_add_menu') ) {
	
	function tx_add_menu() {
		
		$sections_preset = array("aboutus", "services", "portfolio", "blog", "testimonials", "calltoact", "team", "contact"); 
		
		$nx_sections = get_theme_mod( 'nx_sections', $sections_preset);
		foreach ($nx_sections as $section) {
			$addmenu_function_name = "txo_".str_replace('-', '_', $section)."_addmenu";
			if ( function_exists($addmenu_function_name) ) {
				$addmenu_function_name();
			}
		}		

		add_filter( 'body_class', 'txo_home_body_class' );			
	}
		
		/* add body class for i-one i-banner slider */
	function txo_home_body_class( $classes ) {	
			
		$classes[] = 'ione-home txo-home';				
		return $classes;
	}		
}

// Create Menus

function txo_aboutus_addmenu() {
	if( get_theme_mod( 'about_menu', 1) ){
			add_filter( 'wp_nav_menu_items', 'txo_addmenu_aboutus');
			function txo_addmenu_aboutus($menu) {
			$about_link_item = get_theme_mod( 'about_menu_text', __( 'About Us', 'txo' ) );
			$itemlink = '<li><a href="#aboutus">'.$about_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}


function txo_services_addmenu() {
	if( get_theme_mod( 'services_menu', 1) ){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_services');
		function txo_addmenu_services($menu) {  
			$services_link_item = get_theme_mod( 'services_menu_text', __( 'Services', 'txo' ) );
			$itemlink = '<li><a href="#services">'.$services_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}


function txo_portfolio_addmenu() {
	if( get_theme_mod( 'portfolio_menu', 1) ){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_portfolio');
		function txo_addmenu_portfolio($menu) {  
			$portfolio_link_item = get_theme_mod( 'portfolio_menu_text', __( 'Portfolio', 'txo' ) );		
			$itemlink = '<li><a href="#portfolio">'.$portfolio_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}


function txo_blog_addmenu() {
	if( get_theme_mod( 'blog_menu', 1) ){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_blog');
		function txo_addmenu_blog($menu) {  
			$blog_link_item = get_theme_mod( 'blog_menu_text', __( 'Blog', 'txo' ) );			
			$itemlink = '<li><a href="#blog">'.$blog_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}


function txo_testimonials_addmenu() {
	if( get_theme_mod( 'testimonials_menu', 1) ){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_testimonials');
		function txo_addmenu_testimonials($menu) { 
			$testimonials_link_item = get_theme_mod( 'testimonials_menu_text', __( 'Testimonials', 'txo' ) );			
			$itemlink = '<li><a href="#testimonials">'.$testimonials_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}

function txo_team_addmenu() {
	if( get_theme_mod( 'team_menu', 1) ){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_team');
		function txo_addmenu_team($menu) {
			$team_link_item = get_theme_mod( 'team_menu_text', __( 'Team', 'txo' ) );				
			$itemlink = '<li><a href="#team">'.$team_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}

function txo_contact_addmenu() {
	if( get_theme_mod( 'contact_menu', 1) ){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_contact');
		function txo_addmenu_contact($menu) {  
			$contact_link_item = get_theme_mod( 'contact_menu_text', __( 'Contact Us', 'txo' ) );			
			$itemlink = '<li><a href="#contact">'.$contact_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}

function txo_custompage_1_addmenu() {
	if( get_theme_mod( 'custompage1_menu', 1)){
		add_filter( 'wp_nav_menu_items', 'txo_addmenu_custompage1');
		function txo_addmenu_custompage1($menu) {  
			$custompage1_link_item = get_theme_mod( 'custompage1_menu_text', __( 'Custom Page', 'txo' ) );			
			$itemlink = '<li><a href="#custompage1">'.$custompage1_link_item.'</a></li>';
			$menu = $menu . $itemlink;
			return $menu;
		}
	}
}

