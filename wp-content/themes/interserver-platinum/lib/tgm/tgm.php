<?php
/**
 * Recommended plugins.
 *
 * @package Interserver Platinum
 */
 

// TGM Plugin activation.
get_template_part('lib/tgm/class-tgm-plugin','activation');

add_action( 'tgmpa_register', 'interserver_platinum_activate_recommended_plugins' );
function interserver_platinum_activate_recommended_plugins(){
	$plugins = array(
		array(
			'name'               => 'Page Builder by SiteOrigin',
            'slug'               => 'siteorigin-panels',
            'required'           => false,
		),
		array(
			'name'               => 'SiteOrigin Widgets Bundle',
            'slug'               => 'so-widgets-bundle',
            'required'           => false,
		),
		array(
			'name'               => 'One Click Demo Import',
            'slug'               => 'one-click-demo-import',
            'required'           => false,
		),
		array(
			'name'     => esc_html__( 'WooCommerce', 'interserver-platinum' ),
			'slug'     => 'woocommerce',
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'YITH WooCommerce Wishlist', 'interserver-platinum' ),
			'slug'     => 'yith-woocommerce-wishlist',
			'required' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}