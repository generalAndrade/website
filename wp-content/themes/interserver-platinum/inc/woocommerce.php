<?php
/**
 * Woocommerce wrappers
 *
 * @package Interserver Platinum
 */


if ( !class_exists('WooCommerce') )
    return;

/**
 * Declare support
 */
function interserver_platinum_wc_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'interserver_platinum_wc_support' );

/**
 * Enqueue custom CSS for Woocommerce
 */
function interserver_platinum_woocommerce_css() {
    wp_enqueue_style( 'interserver-platinum-wc-css', get_template_directory_uri() . '/woocommerce/css/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'interserver_platinum_woocommerce_css', 1 );
