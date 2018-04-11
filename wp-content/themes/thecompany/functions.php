<?php
/**
 * thecompany functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thecompany
 */

if ( ! function_exists( 'thecompany_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thecompany_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on thecompany, use a find and replace
	 * to change 'thecompany' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'thecompany', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'thecompany' ),
		'footer' => esc_html__( 'Footer Menu', 'thecompany' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'thecompany_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );



	add_theme_support( 'custom-logo', array(
	  'height'      => 45,
	  'width'       => 200,
	  'flex-height' => true,
	  'flex-width'  => true,  
	 ) );

	$GLOBALS['content_width'] = apply_filters( 'thecompany_content_width', 640 );

		//--------------------------THUMBNAILS-SIZE------------------------------------------//
	add_image_size('thecompany-related-thumb',360, 152,true);
	add_image_size('thecompany-slider',1350,390,true);
	add_image_size('thecompany-cat_thumb',890,590,true);

	


}
endif;
add_action( 'after_setup_theme', 'thecompany_setup' );




add_action('comment_form', 'thecompany_comment_button' );
function thecompany_comment_button() {
    echo '<div class="col-sm-12"><div class="single">';
        echo '<button class="btn btn-theme" type="submit">' . __( 'Submit', 'thecompany' ) . '</button>';
    echo '</div></div>';
}


// =========================== HOSTING-ONE BREADCRUMBS ========================== //
if ( ! function_exists( 'thecompany_header_title' ) ) :

	function thecompany_header_title() {
		global $post;
		
		if ( is_day()  ||  is_month() ||  is_year())  {
			echo esc_attr(get_the_time('d m y'));
		
		} elseif ( is_tag() ) {
			echo single_tag_title('', false) ;

		} elseif ( is_author() ) {
			global $author;
				$userdata = esc_attr(get_userdata($author));
				
				echo   $userdata->display_name ;

		 
		} elseif( is_front_page() ) {
				bloginfo('name'); 

			} 
	}


endif;


if ( ! function_exists( 'thecompany_breadcrumbs' ) ) {

	function thecompany_breadcrumbs() {

	$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter = ''; // delimiter between crumbs
	$home = get_bloginfo('name'); // text for the 'Home' link
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$before = '<a>'; // tag before the current crumb
	$after = '</a>'; // tag after the current crumb

	global $post;
	$homeLink = esc_url( home_url() );

	if (is_home() || is_front_page()) {

		if ($showOnHome == 1) echo '<ol class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a></li></ol>';

	} else {

		echo '<ol class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';

		if ( is_category() ) {
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
			echo '<li>'. $before . '' . single_cat_title('', false) . '' . $after.'</li>';

		} elseif ( is_search() ) {
			echo '<li>'. $before . esc_html__('Search results for','thecompany').' "' . get_search_query() . '"' . $after .'</li>';

		} elseif ( is_day() ) {
			echo '<li><a href="' . esc_url(get_year_link(get_the_time(__('Y','thecompany')))) . '">' . get_the_time(__('Y','thecompany')) . '</a> ' . $delimiter . '</li> ';
			echo '<li><a href="' . esc_url(get_month_link(get_the_time(__('Y','thecompany')),get_the_time(__('m','thecompany')))) . '">' . get_the_time(__('F','thecompany')) . '</a> ' . $delimiter . '</li> ';
			echo '<li>'. $before . get_the_time(__('d','thecompany')) . $after .'</li>';

		} elseif ( is_month() ) {
			echo '<li><a href="' . esc_url(get_year_link(get_the_time(__('Y','thecompany')))) . '">' . get_the_time(__('Y','thecompany')) . '</a> ' . $delimiter . '</li> ';
			echo '<li>'. $before . get_the_time(__('F','thecompany')) . $after .'</li>';

		} elseif ( is_year() ) {
			echo '<li>'. $before . get_the_time(__('Y','thecompany')) . $after .'</li>';

		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<li><a href="' .esc_url(get_post_type_archive_link($slug)) . '/">' . $post_type->labels->singular_name . '</a>';
				if ($showCurrent == 1) echo ' ' . $delimiter . '</li> ' . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . '</li> ');
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
				echo '<li>'.$cats.'</li>';
				if ($showCurrent == 1) echo '<li>'. $before . get_the_title() . $after;
			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo '<li>'. $before . $post_type->labels->singular_name . $after .'</li>';

		} elseif ( is_attachment() ) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo '<li>'. get_category_parents($cat, TRUE, ' ' . $delimiter . '</li> ');
			echo '<li><a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a>';
			if ($showCurrent == 1) echo ' ' . $delimiter . '</li> ' . $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
			if ($showCurrent == 1) echo '<li>'. $before . get_the_title() . $after .'</li>';

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_post($parent_id);
				$breadcrumbs[] = '<li><a href="' . esc_url(get_permalink($page->ID)) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . '</li> ';
			}
			if ($showCurrent == 1) echo ' ' . $delimiter . '</li> ' . $before . get_the_title() . $after;

		} elseif ( is_tag() ) {
			echo '<li>'. $before . esc_html__('Post tagged','thecompany').'"'  . single_tag_title('', false) . '"' . $after .'</li>';

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo '<li>'. $before . esc_html__('Articles posted by ','thecompany') . $userdata->display_name . $after .'</li>';

		} elseif ( is_404() ) {
			echo '<li>'. $before . esc_html__('Error 404','thecompany') . $after .'</li>';
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page','thecompany') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '</ol>';

	}
}
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thecompany_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'thecompany' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'thecompany' ),
		'before_widget' => '<div  class="single %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="side-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'thecompany_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function thecompany_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.css',array(), '1.1.2' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css',array(), '1.1.2' );
	wp_enqueue_style( 'animate.min', get_template_directory_uri(). '/css/animate.css',array(), '1.1.2' );
	wp_enqueue_style( 'thecompany-responsive', get_template_directory_uri() .'/css/responsive.css',array(), '1.1.2' );
	wp_enqueue_style( 'thecompany-custom', get_template_directory_uri() .'/css/custom.css',array(), '1.1.2' );	
	wp_enqueue_style( 'thecompany-style', get_stylesheet_uri() );

    $query_args = array('family' => 'Open+Sans:300,400,600,700');
	wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style( 'google-fonts' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/bootstrap.js',array('jquery'), '1.1.2', 1);
	wp_enqueue_script( 'jquery-circle-progress', get_template_directory_uri() .'/js/circle-progress.js',array('jquery'), '1.1.2', 1);
	wp_enqueue_script( 'wow', get_template_directory_uri() .'/js/wow.js',array('jquery'), '1.1.2', 1);
	wp_enqueue_script( 'thecompany-scripts', get_template_directory_uri() .'/js/script.js',array('jquery'), '1.1.2', 1);
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if(is_rtl()){
		wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() .'/css/bootstrap-rtl.css',array());
		wp_enqueue_style( 'font-awesome-rtl', get_template_directory_uri() .'/css/font-awesome-rtl.css',array());
		wp_enqueue_script( 'bootstrap-rtl-js', get_template_directory_uri() . '/js/bootstrap-rtl.js', array(), '1.0.0', true );
       
	}
}
add_action( 'wp_enqueue_scripts', 'thecompany_scripts' );




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/class.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load botstrap navwalker  file.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';



