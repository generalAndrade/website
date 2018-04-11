<?php
/**
 * thecompany Theme Customizer.
 *
 * @package thecompany
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function thecompany_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  
}
add_action( 'customize_register', 'thecompany_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function thecompany_customize_preview_js() {
	wp_enqueue_script( 'thecompany_customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'thecompany_customize_preview_js' );

function thecompany_theme_customizer_register( $wp_customize ) 
    {
      // Do stuff with $wp_customize, the WP_Customize_Manager object.


    	 
   
     $wp_customize->add_panel( 'theme_option', array(
        'priority' => 200,
        'title' => __( 'TheCompany Theme Options', 'thecompany' ),
        'description' => __( 'TheCompany Theme Option', 'thecompany' ),
      ));

   /**
    * Customizer for slider setting 
    */
    require get_template_directory() . '/inc/customizer/customizer-slider.php';

    /**
    * Customizer for search setting 
    */
    require get_template_directory() . '/inc/customizer/customizer-search.php';

    /**
    * Customizer for whychooseus setting 
    */
    require get_template_directory() . '/inc/customizer/customizer-whychooseus.php';

    
     /**
    * Customizer for offer setting 
    */
    require get_template_directory() . '/inc/customizer/customizer-offer.php';

    
    /**
    * Customizer for Other setting 
    */
    require get_template_directory() . '/inc/customizer/customizer-other.php';

  }

  add_action( 'customize_register', 'thecompany_theme_customizer_register' );

  /**
 * Sanitize Input or Textarea.
 * @param $input
 * @return string
 */
function thecompany_sanitize_text( $input ) {
  return sanitize_text_field( $input );
}

/**
 * Sanitize Checkbox.
 * @param $input
 * @return int|string
 */
function thecompany_sanitize_checkbox( $input ) {
  if ( $input == 1 ) {
    return 1;
  } else {
    return '';
  }
}

/**
 * Sanitize Sidebar custom dropdown.
 * @param $input
 * @return string
 */
function thecompany_sanitize_sidebar( $input ) {
  $valid = array(
    'left'   => 'Left',
    'right'  => 'Right',
    'none'   => 'None',
  );

  if ( array_key_exists( $input, $valid ) ) {
    return $input;
  } else {
    return '';
  }
}

/**
 * Sanitize Category.
 * @param $input
 * @return int
 */
function thecompany_sanitize_category($input){
  $output=intval($input);
  return $output;
}
/**
 * Sanitize image.
 * @param $input
 * @return int
 */
function thecompany_sanitize_image( $thecompany_image, $thecompany_setting ) {
        /*
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types()
         */
        $complete_mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );
        // Return an array with file extension and mime_type.
        $thecompany_file = wp_check_filetype( $thecompany_image, $complete_mimes );
        // If $thecompany_image has a valid mime_type, return it; otherwise, return the default.
        return ( $thecompany_file['ext'] ? $thecompany_image : $thecompany_setting->default );
    }

  function thecompany_sanitize_select( $input, $setting ) {
  
      // Ensure input is a slug.
      $input = sanitize_key( $input );
      
      // Get list of choices from the control associated with the setting.
      $choices = $setting->manager->get_control( $setting->id )->choices;
      
      // If the input is a valid key, return it; otherwise, return the default.
      return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }


function thecompany_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


