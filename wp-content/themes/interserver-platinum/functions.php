<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Interserver Platinum
 */

if ( ! function_exists( 'interserver_platinum_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function interserver_platinum_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Interserver Platinum, use a find and replace
	 * to change 'interserver-platinum' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'interserver-platinum', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Content width
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1170; /* pixels */
	}

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('interserver-platinum-large-thumbnail', 850);
	add_image_size('interserver-platinum-medium-thumbnail', 550, 400, true);
	add_image_size('interserver-platinum-small-thumbnail', 250);
	add_image_size('interserver-platinum-service-thumbnail', 350);
	add_image_size('interserver-platinum-mas-thumbnail', 500);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'interserver-platinum' ),
		'footer'   => esc_html__( 'Footer Menu', 'interserver-platinum' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	Enable support for custom logo
	*/

	add_theme_support( 'custom-logo', array(
	   'height'      => 100,
	   'width'       => 350,
	   'flex-width' => true,
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'interserver_platinum_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	// Add Editor Style
	add_editor_style( '/css/editor-style.css' );
}
endif; // interserver_platinum_setup
add_action( 'after_setup_theme', 'interserver_platinum_setup' );

/**
 * Register widget area.
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function interserver_platinum_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'interserver-platinum' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	//Footer widget areas
	$widget_areas = get_theme_mod('footer_widgets', '3');
	for ($i=1; $i<=$widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'interserver-platinum' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'interserver_platinum_widgets_init' );


function interserver_platinum_scripts(){
	global $ip_default;
	echo "<script>var header_style;</script>";
	$header_alignment = get_theme_mod('header_alignment',$ip_default['header_alignment']);
	if ($header_alignment != $ip_default['header_alignment']){
	echo "<script>header_style = 'centered';</script>";
	}
	wp_enqueue_style( 'interserver-platinum-fonts', esc_url( interserver_platinum_google_fonts() ), array(), null );
	wp_enqueue_style( 'interserver-platinum-style', get_stylesheet_uri());
	wp_enqueue_style( 'nivo-slider-style', get_template_directory_uri() . '/css/nivo-slider.css' );
	wp_enqueue_style( 'interserver-platinum-fontawesome', get_template_directory_uri() . '/fonts/font-awesome.min.css' );
	wp_enqueue_style( 'interserver-platinum-ie9', get_template_directory_uri() . '/css/ie9.css', array( 'interserver-platinum-style' ) );
	wp_style_add_data( 'interserver-platinum-ie9', 'conditional', 'lte IE 9' );
	wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery'),'', true );
	wp_enqueue_script( 'interserver-platinum-navigation', get_template_directory_uri() . '/js/responsive-nav.js', array(), '20151215', true );
	wp_enqueue_script( 'interserver-platinum-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'),'20170504', true );
	wp_enqueue_script( 'interserver-platinum-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( get_theme_mod('blog_layout') == 'masonry-layout' && (is_home() || is_archive()) ) {
		wp_enqueue_script( 'interserver-platinum-masonry', get_template_directory_uri() . '/js/masonry.js', array('masonry'),'', true );
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','interserver_platinum_scripts');



// Enqueue Bootstrap
 function interserver_platinum_enqueue_bootstrap() {
	wp_enqueue_style( 'interserver-platinum-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), true );
}
add_action( 'wp_enqueue_scripts', 'interserver_platinum_enqueue_bootstrap', 9 );

// Load init.
require trailingslashit( get_template_directory() ) . 'inc/init.php';


// Fonts
if ( !function_exists('interserver_platinum_google_fonts') ) :
function interserver_platinum_google_fonts() {
	global $ip_default;
	$body_font 		= get_theme_mod('body_font_name', $ip_default['body_font_name']);
	$headings_font 	= get_theme_mod('headings_font_name', $ip_default['headings_font_name']);

	$fonts     		= array();
	$fonts[] 		= esc_attr( str_replace( '+', ' ', $body_font ) );
	$fonts[] 		= esc_attr( str_replace( '+', ' ', $headings_font ) );

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) )
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;	
}
endif;