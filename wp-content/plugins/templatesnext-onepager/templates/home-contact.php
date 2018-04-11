<!--Contact section-->
<?php
$contact_title = $contact_subtitle = $contact_desc = $response = "";
$contact_title = esc_attr(get_theme_mod( 'contact_title', __( 'Our contact', 'txo' )));
$contact_subtitle = esc_attr(get_theme_mod( 'contact_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));

$contact_bg_image = esc_url(get_theme_mod( 'contact_bg_image', '' ));
$contact_bg_repeat = esc_attr(get_theme_mod( 'contact_bg_repeat', 'repeat' ));
$contact_bg_attach = esc_attr(get_theme_mod( 'contact_bg_attach', 'fixed' ));
$contact_bg_size = esc_attr(get_theme_mod( 'contact_bg_size', 'auto' ));
$contact_bg_position = esc_attr(get_theme_mod( 'contact_bg_position', 'left top' ));
$contact_text_color = esc_attr(get_theme_mod( 'contact_text_color', '#373737' ));
$contact_bg_color = esc_attr(get_theme_mod( 'contact_bg_color', 'rgba(232, 232, 232, 1)' ));
$contact_overlay_color = esc_attr(get_theme_mod( 'contact_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$contact_fullwidth = esc_attr(get_theme_mod( 'contact_fullwidth', 1 ));

$contact_title_color = esc_attr(get_theme_mod( 'contact_title_color', '#484848' ));
$contact_subtitle_color = esc_attr(get_theme_mod( 'contact_subtitle_color', '#595959' ));

$section_style = '';

$section_style .= 'background-image : url('. $contact_bg_image . '); ';
$section_style .= 'background-repeat : '. $contact_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $contact_bg_attach . '; ';
$section_style .= 'background-size : '. $contact_bg_size . '; ';
$section_style .= 'background-position : '. $contact_bg_position . '; ';
//$section_style .= 'color : '. $contact_text_color . '; ';
$section_style .= 'background-color : '. $contact_bg_color . ';';


$section_fullwidth = '';

if( $contact_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}



$contact_email = sanitize_email(get_theme_mod( 'contact_email', get_option('admin_email') ));
$contact_adder = esc_attr(get_theme_mod( 'contact_address', 'Prateek Laurel, sector 120 noida, india' ));


// form codes ////////////////////////////////
// ///////////////////////////////////////////


?>
<section id="contact" class="txsec-contact">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=contact' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="contact_inner">
    
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $contact_overlay_color; ?> ;">        
        <div class="tx-fw-content" style="color: <?php echo $contact_text_color; ?>">
            <h2 class="testimonials-title" style="color: <?php echo $contact_title_color; ?>"><?php echo $contact_title; ?></h2>
            <h3 class="testimonials-subtitle" style="color: <?php echo $contact_subtitle_color; ?>"><?php echo $contact_subtitle; ?></h3>


    <div class="tx-row">
        <div class="tx-column tx-column-size-1-2">            
            <form id="contactform" name="contactform" method="post">  
                <p>
                <input type="text" class="form-control input-name" name="name" id="name" size="30" value="" placeholder="<?php _e( 'Name(Required)', 'txo' ) ?>" required/>
                </p>
                <p>
                <input type="text" class="form-control input-email" name="email" id="email" size="30" value="" placeholder="<?php _e( 'Email(Required)', 'txo' ) ?>" required/>
                </p>
                <p>	
                <input type="text" name="phone" id="phone" size="30" placeholder="<?php _e( 'Phone', 'txo' ) ?>" value="" />
                </p>
                <p>
                <textarea name="message" class="form-control input-message" id="message" placeholder="<?php _e( 'Message(Required)', 'txo' ) ?>" required></textarea>
                </p>
                <input type="hidden" name="captcha" value="cat"/>
                <input type="hidden" name="adminmail" value="<?php echo $contact_email; ?>"/>
                <input id="tmpuri" type="hidden" name="tempuri" value="<?php echo get_option('siteurl'); ?>" />
                <input type="hidden" name="action" value="mail_before_submit" />
                <input type="text" name="htrap" id="htrap" value="" />
            
                <input id="submit" class="contact-submit1" type="submit" name="submit1" value="<?php _e( 'Send', 'txo' ) ?>" />  
    
            </form>
            
            <div id="result"></div>
                    
                    <div id="success">
                      <span>
                        <p><?php _e( 'Your message was sent succssfully! We will be in touch as soon as we can.', 'txo' ) ?></p>
                      </span>
                    </div>
                    
                    <div id="error">
                      <span>
                        <p><?php _e( 'Something went wrong, try refreshing and submitting the form again.', 'txo' ) ?></p>
                      </span>
                    </div>
                </div>
                <div class="tx-column tx-column-size-1-2"> 
                    <div class="nx-gmap nx-responsive-media-yes" style="padding-bottom: 0px;">
                        <iframe src="http://maps.google.com/maps?q=<?php echo $contact_adder; ?>&amp;output=embed&amp;noscroll=1" height="340" width="100%"></iframe>
                    </div>
                </div>
            </div>    
    
            <h1><?php echo $response; ?></h1>
        	<div class="clear"></div>
            <span id="txo_email_ajax_nonce" data-nonce="<?php echo wp_create_nonce( 'txo_email_ajax_nonce' ); ?>"></span>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/Contact section-->

