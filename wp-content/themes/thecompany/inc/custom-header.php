<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package thecompany
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses thecompany_header_style()
 */
function thecompany_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'thecompany_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ff6100',
		'width'                  => 1920,
		'height'                 => 500,
		'flex-height'            => true,
		'wp-head-callback'       => 'thecompany_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'thecompany_custom_header_setup' );

if ( ! function_exists( 'thecompany_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see thecompany_custom_header_setup().
 */
function thecompany_header_style() {
	$header_text_color = get_header_textcolor();

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description,
		.logo-menu .main-menu .navbar-nav > li > a:hover,.logo-menu .dropdown-menu > li > a:hover , .logo-menu .dropdown-menu .dropdown .dropdown-menu > li > a:hover  {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
		.logo-menu .main-menu .navbar-default .navbar-nav > .active > a{
			background: #<?php echo esc_attr( $header_text_color ); ?>;
		}
		.logo-menu .dropdown-menu{
			border-top: 4px solid #<?php echo esc_attr( $header_text_color ); ?>;
		}

		.logo-menu .dropdown-menu:before {
		border-bottom: 10px solid #<?php echo esc_attr( $header_text_color ); ?>;
		}
		.logo-menu .dropdown-menu .dropdown-menu {
		border-left: 4px solid #<?php echo esc_attr( $header_text_color ); ?>;
		}
		.logo-menu .dropdown-menu .dropdown-menu:before {
		border-right: 10px solid #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
<?php
	 if(get_header_image() ){
        ?>        
        .page-header{
            background:url('<?php  header_image(); ?>');
            background-repeat: no-repeat;
            background-position: center;
             background-size: cover;
        }       
    <?php
     }
     ?>
	</style>
	<?php
}
endif;
