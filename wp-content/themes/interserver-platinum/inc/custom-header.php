<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @package Interserver Platinum
 */


function interserver_platinum_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'interserver_platinum_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'     => '000000',
		'width'                  => 1920,
		'height'                 => 1080,
		'flex-height'            => true,
		'video'					 => true,
		'video-active-callback'  => '',
		'wp-head-callback'       => 'interserver_platinum_header_style',
		'admin-head-callback'    => 'interserver_platinum_admin_header_style',
		'admin-preview-callback' => 'interserver_platinum_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'interserver_platinum_custom_header_setup' );

if ( ! function_exists( 'interserver_platinum_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see interserver_platinum_custom_header_setup().
 */
function interserver_platinum_header_style() {
	global $ip_default;
	$front_header = get_theme_mod('front_header_type', $ip_default['front_header_type']);
	$site_header = get_theme_mod('site_header_type', $ip_default['site_header_type']);
	if ( get_header_image() && ( $front_header == 'image' && is_front_page() || $site_header == $ip_default['site_header_type'] && !is_front_page() ) ) {
	?>
	<style type="text/css">
		.header-image {
			background-image: url(<?php echo esc_attr(get_header_image()); ?>);
			display: block;
		}
		@media only screen and (max-width: 1024px) {
			.header-inner {
				display: block;
			}
			.header-image {
				background-image: none;
				height: auto !important;
			}		
		}
	</style>
	<?php
	}
}
endif; // interserver_platinum_header_style

/**
 * Video header settings
 */
function interserver_platinum_video_settings( $settings ) {
	$settings['l10n']['play'] 	= '<i class="fa fa-play"></i>';
	$settings['l10n']['pause'] 	= '<i class="fa fa-pause"></i>';
	$settings['minWidth'] 		= '100';
	$settings['minHeight'] 		= '100';
	return $settings;
}
add_filter( 'header_video_settings', 'interserver_platinum_video_settings' );

if ( ! function_exists( 'interserver_platinum_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see interserver_platinum_custom_header_setup().
 */
function interserver_platinum_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<h1 class="displaying-header-text"><a id="name"<?php echo esc_attr($style); ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo esc_attr($style); ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // interserver_platinum_admin_header_image