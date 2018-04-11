 <?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Interserver Platinum
 */
?>
<?php
	/**
	 * Hook - interserver_platinum_action_after_content.
	 *
	 * @hooked interserver_platinum_content_end 
	 */
	do_action( 'interserver_platinum_action_after_content' );
?>

  <?php
	/**
	 * Hook - interserver_platinum_action_after.
	 *
	 * @hooked interserver_platinum_footer_go_to_top - 10
	 */
	do_action( 'interserver_platinum_action_after' );
?>

	<?php
	/**
	 * Hook - interserver_platinum_action_before_footer.
	 *
	 * @hooked interserver_platinum_add_footer_widget_area - 5
	 * @hooked interserver_platinum_footer_start - 10
	 */
	do_action( 'interserver_platinum_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - interserver_platinum_action_footer.
	   *
	   * @hooked interserver_platinum_footer_copyright - 10
	   */
	  do_action( 'interserver_platinum_action_footer' );
	?>
	
 <?php
	/**
	 * Hook - interserver_platinum_action_after_footer.
	 *
	 * @hooked interserver_platinum_footer_end - 10
	 */
	do_action( 'interserver_platinum_action_after_footer' );
	?>
    
     
    <?php
	/**
	 * Hook - interserver_platinum_action_after_page.
	 *
	 * @hooked interserver_platinum_page_end - 10
	 */
	do_action( 'interserver_platinum_action_after_page' );
?>
<?php wp_footer(); ?>
</body>
</html>