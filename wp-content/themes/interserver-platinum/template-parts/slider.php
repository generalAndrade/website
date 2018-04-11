<?php
/**
 * Slider template
 *
 * @package Interserver Platinum
 */

//Slider template
if ( ! function_exists( 'interserver_platinum_featured_header_template' ) ) :
function interserver_platinum_featured_header_template() {
	interserver_platinum_header_slider();
	interserver_platinum_header_image();
	interserver_platinum_header_video(); 
}
endif;
// Call Custom Header
	interserver_platinum_featured_header_template();

