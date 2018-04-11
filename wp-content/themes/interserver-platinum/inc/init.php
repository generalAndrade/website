<?php
/**
 * Load files.
 *
 * @package Interserver Platinum
 */


/**
 * Implement the Custom Header feature.
 */
get_template_part('inc/custom','header');

/**
 * Custom functions that act independently of the theme templates.
 */
get_template_part('inc/extras');

/**
 * Custom template tags for this theme.
 */
get_template_part('inc/template','tags');

/**
 * Load Jetpack compatibility file.
 */
get_template_part('inc/jetpack');

/**
 * Woocommerce basic integration
 */
get_template_part('inc/woocommerce');

// Load customize defaults.
include(locate_template('inc/customizer/defaults.php'));

/**
 * Customizer additions.
 */
include(locate_template('inc/customizer.php'));

/**
 * Load hooks.
 */
include(locate_template('inc/hook/basic.php'));
include(locate_template('inc/hook/structure.php'));
include(locate_template('inc/hook/custom.php'));
/**
 * Load Customizer Styles.
 */
get_template_part('inc/customizer/styles');

/**
 * TGM
 */
get_template_part('lib/tgm/tgm');

/**
 * Demo Content Import
 */
get_template_part('demo-import/demo','setup');