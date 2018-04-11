<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package Interserver Platinum
 */

//Add Skip to content
if ( ! function_exists( 'interserver_platinum_skip_to_content' ) ) :
	function interserver_platinum_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'interserver-platinum' ); ?></a><?php
	}
endif;
add_action( 'interserver_platinum_action_before', 'interserver_platinum_skip_to_content', 15 );

// Go to top
if ( ! function_exists( 'interserver_platinum_footer_go_to_top' ) ) :
	function interserver_platinum_footer_go_to_top() {
		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"></i></a>';
	}
endif;
add_action( 'interserver_platinum_action_after', 'interserver_platinum_footer_go_to_top', 10);

// Add Sidebar widget area
if ( ! function_exists( 'interserver_platinum_add_sidebar_widget_area' ) ) :
	function interserver_platinum_add_sidebar_widget_area() { ?>
    <div id="secondary" class="widget-area col-md-3" role="complementary">
		<?php dynamic_sidebar('sidebar-1');?>
    </div>
    <?php
	}
	endif;
add_action( 'interserver_platinum_action_sidebar','interserver_platinum_add_sidebar_widget_area');

// Add Footer widget area
if ( ! function_exists( 'interserver_platinum_add_footer_widget_area' ) ) :
	function interserver_platinum_add_footer_widget_area() {
		$widget_areas = get_theme_mod('footer_widgets', '4');
		if ($widget_areas == '4') {
			$cols = 'col-md-3';
		} elseif ($widget_areas == '3') {
			$cols = 'col-md-4';
		} elseif ($widget_areas == '2') {
			$cols = 'col-md-6';
		} else {
			$cols = 'col-md-12';
		}
	?>

	<div id="footer-widgets" class="footer-widgets widget-area" role="complementary">
		<div class="container">
		<div class="row">
			<?php 
		for($i=1;$i<=$widget_areas*1;$i++){
			if ( is_active_sidebar( 'footer-'.$i ) ) : ?>
				<div class="sidebar-column <?php echo esc_attr($cols); ?>">
					<?php dynamic_sidebar( 'footer-'.$i); ?>
				</div>
			<?php endif; ?>	
			<?php } ?>
		</div>
		</div>	
	</div>
    <?php
	}
endif;
add_action( 'interserver_platinum_action_before_footer','interserver_platinum_add_footer_widget_area',5);

// Footer copyright
if ( ! function_exists( 'interserver_platinum_footer_copyright' ) ) :
	function interserver_platinum_footer_copyright() {
		global $ip_default;
	// Copyright content.
		$copyright_text = get_theme_mod( 'footer_copyright', $ip_default['footer_copyright']);
		if ( ! empty( $copyright_text ) ) {
			$copyright_text = wp_kses_data( $copyright_text );
		}

		// Powered by content.
		$powered_by_text = sprintf( /* translators: %s: theme author */
			esc_html__( 'Interserver Platinum by %s', 'interserver-platinum' ), '<a target="_blank" rel="author" href="https://www.interserver.net/tips/free-wordpress-themes/">' . esc_html__( 'InterServer Web Hosting', 'interserver-platinum' ) . '</a>' );
		?>

		<div class="footer-bottom">
		    <div class="row">
			<?php if ( ! empty( $copyright_text ) ) : ?>
		    	<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="copyright">
		    		<?php echo wp_kses_data($copyright_text); ?>
		    	</div><!-- .copyright -->
                </div>
		    <?php endif; ?>

		    <?php if ( ! empty( $powered_by_text ) ) : ?>
		    	<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="site-info">
		    		<?php echo wp_kses_data($powered_by_text); ?>
		    	</div><!-- .site-info -->
                </div>
		    <?php endif; ?>
</div>
		</div><!-- footer-bottom-->

	    <?php
	}
endif;
add_action( 'interserver_platinum_action_footer', 'interserver_platinum_footer_copyright', 10 );

// Slider
if ( ! function_exists( 'interserver_platinum_display_featured_header' ) ) :
	function interserver_platinum_display_featured_header (){
	global $ip_default;
	$front_header = get_theme_mod('front_header_type', $ip_default['front_header_type']);
	$site_header = get_theme_mod('site_header_type', $ip_default['site_header_type']);
	if ($front_header != 'default' && is_front_page() || $site_header != 'default' && !is_front_page()) {
		echo '<div id="interserver_platinum_header" class="header-area">';
	}
	// Load Slider 
	include(locate_template('template-parts/slider.php'));
	if ($front_header != 'default' && is_front_page() || $site_header != 'default' && !is_front_page()) {	
    echo '</div>';
	}
	}
endif;
add_action('interserver_platinum_action_after_header','interserver_platinum_display_featured_header', 10);
	
	 
