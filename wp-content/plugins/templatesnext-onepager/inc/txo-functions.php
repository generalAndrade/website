<?php

/*
* Adding OnePger template in theme folder
*/

function txo_add_onepager_template() {

	$templatename = 'txo-onepager.php';
    $current_theme = wp_get_theme();
    $theme_path = get_theme_root() . "/" . $current_theme->stylesheet;
    $template_file = $theme_path . "/" . $templatename;
        
	// Content for template file Start
     $content = '<?php
		/**
		 * Template Name: TX OnePage Home
		 * The template for displaying TemplatesNext OnePager Home Page
		 *
		 *
		 * @package templatesnext-onepager
		 * @since templatesnext-onepager 1.1.0
		 */
		
		if (function_exists(\'txo_sections_show\')) {  
			tx_add_menu();
		}
		
		get_header(); ?>
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
				<?php
				
					if (function_exists(\'txo_sections_show\')) {
						txo_sections_show();
					}				
					
				 ?>
				</div><!-- #content -->
			</div><!-- #primary -->
		<?php get_footer();';
        // Content for template file End
       
       if (!file_exists($template_file))
	   {
            $filehandle = fopen($template_file, "wb")or die('Cannot open file:  ' . $template_file);
            fwrite($filehandle, $content);
            fclose($filehandle);
			
			//exit(wp_redirect(admin_url('admin.php?page=add-custom-template&settings-updated=true')));
        }
}

add_action('admin_init', 'txo_add_onepager_template');


// if you want only logged in users to access this function use this hook
add_action('wp_ajax_mail_before_submit', 'txo_send_mail_before_submit');

// if you want none logged in users to access this function use this hook
add_action('wp_ajax_nopriv_mail_before_submit', 'txo_send_mail_before_submit');


function txo_send_mail_before_submit(){
	
    //check_ajax_referer('txo_email_ajax_nonce');
	
    if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	//if ( isset($_POST['action']) && $_POST['action'] == "mail_before_submit" ){	
		
	
		$to = sanitize_email($_REQUEST['adminmail']);
		
		$htrap = $_REQUEST['htrap'];  // empty hidden field to trap spams
		$captcha = $_REQUEST['captcha']; 	//another hidden field with a default value to trap spam
	
		$from = sanitize_email($_REQUEST['email']); 				
		$name = esc_attr($_REQUEST['name']);
		
		$phone = esc_attr($_REQUEST['phone']);
		$message = esc_attr($_REQUEST['message']);
		
		$headers  = "From: $from\r\n"; 
		$headers .= "Reply-To: $from\r\n"; 
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 	
		
		$subject = "Message from ".$name." sent via your site"; 
	
		$content = "Name : ".$name."<br />";
		$content .= "Email : ".$from."<br />";
		$content .= "Phone : ".$phone."<br />";
		$content .= "Message : ".$message."<br />";	
	
		if( $htrap == "" && $captcha == "cat" )
		{
			// Send the email.
			if ( wp_mail($to, $subject, $content, $headers) ) {
				// Set a 200 (okay) response code.
				http_response_code(200);
				echo "Thank You! Your message has been sent";
				wp_die();
			} else {
				// Set a 500 (internal server error) response code.
				http_response_code(500);
				echo "Oops! Something went wrong and we couldn't send your message.";
				wp_die();
			}
		} else {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            wp_die();
        }
		
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
		wp_die();
    }	
	
	echo "Spam detected!";
	wp_die();
		
}




