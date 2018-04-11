<?php

/************************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
//ENQUEUE FRONT SCRIPTS
function avis_lite_theme_stylesheet()
{
	global $is_IE;

	$theme = wp_get_theme();

	if($is_IE ) {	
		wp_enqueue_style( 'avis-ie-style', get_template_directory_uri().'/css/ie-style.css', false, $theme->Version );
		wp_enqueue_style( 'font-awesome-ie7', get_template_directory_uri().'/css/font-awesome-ie7.css', false, '3.2.1' );
	}

	wp_enqueue_script( 'hoverIntent');
	wp_enqueue_script( 'avis-custom', get_template_directory_uri() .'/js/custom.js', array('jquery'), '1.0', $theme->Version );
	wp_enqueue_script( 'comment-reply');

	wp_enqueue_script( 'superfish', get_template_directory_uri().'/js/superfish.js', array('jquery'), true, '1.0');
	wp_enqueue_script( 'AnimatedHeader', get_template_directory_uri().'/js/cbpAnimatedHeader.js', array('jquery'), true, '1.0.0');
	wp_enqueue_script( 'waypoint', get_template_directory_uri().'/js/waypoints.js', array('jquery'), true, '2.0.5');
	
	wp_enqueue_style( 'avis-style', get_stylesheet_uri() );
	wp_enqueue_style( 'animation', get_template_directory_uri().'/css/avis-animation.css', false, $theme->Version);
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css', false, '4.4.0');
	
	/*SUPERFISH*/
	wp_enqueue_style( 'superfish', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap-responsive.css', false, '2.3.2');
	
	/*GOOGLE FONTS*/
	wp_enqueue_style( 'google-Fonts-raleway','//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900', false, $theme->Version);

}
add_action('wp_enqueue_scripts', 'avis_lite_theme_stylesheet');

function avis_lite_head() {
	if(!is_admin()) {
		require_once(get_template_directory().'/includes/avis-custom-css.php');
	}
}
add_action('wp_head', 'avis_lite_head');