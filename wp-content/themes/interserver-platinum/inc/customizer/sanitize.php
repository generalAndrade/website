<?php
/**
 * Sanitize functions
 * @package Interserver Platinum
 */

//Header type
function interserver_platinum_sanitize_layout( $input ) {
    $choices = array(
        'slider'    => __('Full screen slider', 'interserver-platinum'),
        'image'     => __('Image', 'interserver-platinum'),
        'core-video'=> __('Video', 'interserver-platinum'),
        'default'   => __('Default header', 'interserver-platinum')
    );
   if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}
//Text
function interserver_platinum_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Background size
function interserver_platinum_sanitize_bg_size( $input ) {
    $choices = array(
        'cover'     => __('Cover', 'interserver-platinum'),
        'contain'   => __('Contain', 'interserver-platinum'),
    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}

//Footer widget areas
function interserver_platinum_sanitize_footer_widget( $input ) {
    $choices = array(
        '1'     => __('One', 'interserver-platinum'),
        '2'     => __('Two', 'interserver-platinum'),
        '3'     => __('Three', 'interserver-platinum'),
        '4'     => __('Four', 'interserver-platinum')
    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}

//Sticky menu
function interserver_platinum_sanitize_sticky_header( $input ) {
    $choices = array(
        'sticky'     => __('Sticky', 'interserver-platinum'),
        'static'   => __('Static', 'interserver-platinum'),
    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}

//Blog Layout
function interserver_platinum_sanitize_blog( $input ) {
    $choices = array(
        'classic'    => __( 'Classic', 'interserver-platinum' ),
        'fullwidth'  => __( 'Full width (no sidebar)', 'interserver-platinum' ),
        'masonry-layout'    => __( 'Masonry (grid style)', 'interserver-platinum' )

    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}
//Slider Height
function interserver_platinum_sanitize_slider_height( $input ) {
    $choices = array(
        'full'    => __('Full screen', 'interserver-platinum'),
        'custom'    => __('Custom', 'interserver-platinum'),
    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}

//Mobile slider
function interserver_platinum_sanitize_mslider( $input ) {
    $choices = array(
        'fullscreen'    => __('Full screen', 'interserver-platinum'),
        'responsive'    => __('Responsive', 'interserver-platinum'),
    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}

//Menu style
function interserver_platinum_sanitize_header_alignment( $input ) {
    $choices = array(
        'inline'     => __('Inline', 'interserver-platinum'),
        'centered'   => __('Centered (menu and site logo)', 'interserver-platinum'),
    );
    if ( array_key_exists( $input, $choices ) ) {
        return $input;
    } else {
        return '';
    }
}

//Checkboxes
function interserver_platinum_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

if ( ! function_exists( 'interserver_platinum_sanitize_textarea_content' ) ) :

// Textarea
function interserver_platinum_sanitize_textarea( $input, $setting ) {
	return ( stripslashes( wp_filter_post_kses( addslashes( $input ) ) ) );
}
endif;
