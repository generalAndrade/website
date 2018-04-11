<?php
/*
/**
 * Functions to provide support for the One Click Demo Import plugin (wordpress.org/plugins/one-click-demo-import)
 *
 * @package Interserver Platinum
 */


/*Import demo data*/
if ( ! function_exists( 'interserver_platinum_demo_import_files' ) ) :
function interserver_platinum_demo_import_files() {
    return array(
        array(
            'import_file_name'             => 'Interserver Platinum Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-import/ip-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo-import/ip-widgets.wie',
            'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'interserver-platinum' ),
        ),
		);
}
add_filter( 'pt-ocdi/import_files', 'interserver_platinum_demo_import_files' );
endif;

/**
 * Action that happen after import
 */
if ( ! function_exists( 'interserver_platinum_after_demo_import' ) ) :
function interserver_platinum_after_demo_import( $selected_import ) {
    if ( 'Interserver Platinum Demo' === $selected_import['import_file_name'] ) {
        //Set Menu
        $primary_menu = get_term_by('name', 'Main Menu', 'nav_menu');
        $footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');
        set_theme_mod( 'nav_menu_locations' , array( 
              'primary' => $primary_menu->term_id, 
              'footer' => $footer_menu->term_id 
             ) 
        );

    // Set Up the Front page
        $front_page = get_page_by_title( 'Front Page' );
        $blog_page  = get_page_by_title( 'Blog' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page -> ID );
        update_option( 'page_for_posts', $blog_page -> ID );

    //Assign the Front Page template
    update_post_meta( $front_page -> ID, '_wp_page_template', 'page-templates/tpl-front-page.php' );

    }
    
}
add_action( 'pt-ocdi/after_import', 'interserver_platinum_after_demo_import' );
endif;

/**
* Remove branding
*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );