<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Interserver Platinum
 */
?>
<?php
	/**
	 * Hook - interserver_platinum_action_doctype.
	 *
	 * @hooked interserver_platinum_doctype -  10
	 */
	do_action( 'interserver_platinum_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - interserver_platinum_action_head.
	 *
	 * @hooked interserver_platinum_head -  10
	 */
	do_action( 'interserver_platinum_action_head' );
	?>

<?php wp_head(); ?>
</head>


<body <?php body_class();?>>
	<?php
	/**
	 * Hook - interserver_platinum_before_site.
	 *
	 * @hooked interserver_platinum_preloader 
	 */
	do_action( 'interserver_platinum_before_site' );
	?>
	<?php
	/**
	 * Hook - interserver_platinum_action_before_page.
	 *
	 * @hooked interserver_platinum_page_start 
	 */
	do_action( 'interserver_platinum_action_before_page' );
	?>
    
    <?php
	/**
	 * Hook - interserver_platinum_action_before.
	 *
	 * @hooked interserver_platinum_skip_to_content 
	 */
	do_action( 'interserver_platinum_action_before' );
	?>
    
    
    <?php
	 /**
	  * Hook - interserver_platinum_action_before_header.
	  *
	  * @hooked interserver_platinum_header_top_bar - 5
	  * @hooked interserver_platinum_header_start - 10
	 */
	do_action( 'interserver_platinum_action_before_header' );
	?>

    <?php
	 /**
	  * Hook - interserver_platinum_action_header.
	  *
	  * @hooked interserver_platinum_site_header 
	 */
	do_action( 'interserver_platinum_action_header' );
	?>
    
	<?php
	 /**
	  * Hook - interserver_platinum_action_after_header.
	  *
	  * @hooked interserver_platinum_header_end - 5 
	  * @hooked interserver_platinum_display_featured_header - 10
	 */
	do_action( 'interserver_platinum_action_after_header' );
	?>
       
     <?php
	 /**
	  * Hook - interserver_platinum_action_before_content
	  *
	  * @hooked interserver_platinum_content_start
	 */
	do_action( 'interserver_platinum_action_before_content' );
	?>
    
