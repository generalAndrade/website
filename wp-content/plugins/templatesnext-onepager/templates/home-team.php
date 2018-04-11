<!--Team section-->
<?php
$team_title = $team_subtitle = $team_desc = "";
$team_title = esc_attr(get_theme_mod( 'team_title', __( 'Our team', 'txo' )));
$team_subtitle = esc_attr(get_theme_mod( 'team_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));


$team_bg_image = esc_url(get_theme_mod( 'team_bg_image', '' ));
$team_bg_repeat = esc_attr(get_theme_mod( 'team_bg_repeat', 'repeat' ));
$team_bg_attach = esc_attr(get_theme_mod( 'team_bg_attach', 'fixed' ));
$team_bg_size = esc_attr(get_theme_mod( 'team_bg_size', 'auto' ));
$team_bg_position = esc_attr(get_theme_mod( 'team_bg_position', 'left top' ));
$team_text_color = esc_attr(get_theme_mod( 'team_text_color', '#373737' ));
$team_bg_color = esc_attr(get_theme_mod( 'team_bg_color', 'rgba(255, 255, 255, 1)' ));
$team_overlay_color = esc_attr(get_theme_mod( 'team_overlay_color', 'rgba(255, 255, 255, 0.5)' ));
$team_fullwidth = esc_attr(get_theme_mod( 'team_fullwidth', 1 ));

$team_title_color = esc_attr(get_theme_mod( 'team_title_color', '#484848' ));
$team_subtitle_color = esc_attr(get_theme_mod( 'team_subtitle_color', '#595959' ));

$section_style = '';

$section_style .= 'background-image : url('. $team_bg_image . '); ';
$section_style .= 'background-repeat : '. $team_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $team_bg_attach . '; ';
$section_style .= 'background-size : '. $team_bg_size . '; ';
$section_style .= 'background-position : '. $team_bg_position . '; ';
//$section_style .= 'color : '. $team_text_color . '; ';
$section_style .= 'background-color : '. $team_bg_color . ';';


$section_fullwidth = '';

if( $team_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}


$team_preset = array (
	array(
		'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team1.jpg',
		'team_name' 	=> __( 'Patricia Johnson', 'txo' ),
		'team_desig' 	=> __( 'Director', 'txo' ),
		'team_twitter'  => 'https://twitter.com/templatesnext',
		'team_skype'	=> 'templatesnext',
		'team_facebook' => 'https://facebook.com/templatesnext',				
		'team_gplus' 	=> 'https://plus.google.com/collections/',
		'team_linkedin' => 'https://www.linkedin.com/in/',
	),
	array(
		'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team2.jpg',
		'team_name' 	=> __( 'Linda Brown', 'txo' ),
		'team_desig' 	=> __( 'CR Manager', 'txo' ),
		'team_twitter'  => 'https://twitter.com/templatesnext',
		'team_skype'	=> 'templatesnext',
		'team_facebook' => 'https://facebook.com/templatesnext',				
		'team_gplus' 	=> 'https://plus.google.com/collections/',
		'team_linkedin' => 'https://www.linkedin.com/in/',										
	),
	array(
		'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team3.jpg',
		'team_name' 	=> __( 'Jennifer Jones', 'txo' ),
		'team_desig' 	=> __( 'Lead Designer', 'txo' ),
		'team_twitter'  => 'https://twitter.com/templatesnext',
		'team_skype'	=> 'templatesnext',
		'team_facebook' => 'https://facebook.com/templatesnext',				
		'team_gplus' 	=> 'https://plus.google.com/collections/',
		'team_linkedin' => 'https://www.linkedin.com/in/',												
	),
	array(
		'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team4.jpg',
		'team_name' 	=> __( 'Robert Wilson', 'txo' ),
		'team_desig' 	=> __( 'Lead Developer', 'txo' ),
		'team_twitter'  => 'https://twitter.com/templatesnext',
		'team_skype'	=> 'templatesnext',
		'team_facebook' => 'https://facebook.com/templatesnext',				
		'team_gplus' 	=> 'https://plus.google.com/collections/',
		'team_linkedin' => 'https://www.linkedin.com/in/',												
	),
);	

$members = get_theme_mod('txo_team', $team_preset);
$member_loop = "";
$member_no = 1;
$template_dir = TX_ONEPAGER_URL;

foreach( $members as $member ) {
	If ( $member_no <= 4 ) {
		
		$team_image = esc_attr($member['team_image']);
		$team_name = esc_attr($member['team_name']);
		$team_desig = esc_attr($member['team_desig']);
		$team_twitter = esc_attr($member['team_twitter']);
		$team_skype = esc_attr($member['team_skype']);
		$team_facebook = esc_attr($member['team_facebook']);
		$team_gplus = esc_attr($member['team_gplus']);
		$team_linkedin = esc_attr($member['team_linkedin']);
		
		if ( false !== strpos( $team_image, $template_dir ) ) {
			$team_image_url = $team_image;
			$chek = 'YO-';
		} else
		{
			$team_image_url = wp_get_attachment_image_src( $team_image, 'txo-slider-thumb' );
			$team_image_url = $team_image_url[0];
			$chek = 'YO+';			
		}
		
		$member_loop .= '<div class="tx-team-item">';
    		$member_loop .= '<div class="tx-team-box">';
        		$member_loop .= '<div class="tx-team-img">';
            		$member_loop .= '<img src="'.$team_image_url.'" alt="" class="team-image">';
                	$member_loop .= '<div class="tx-team-socials">';
                		$member_loop .= '<span class="tx-twitter"><a href="'.$team_twitter.'"><i class="fa fa-twitter"></i></a></span>';
                    	$member_loop .= '<span class="tx-facebook"><a href="'.$team_facebook.'"><i class="fa fa-facebook"></i></a></span>';
                    	$member_loop .= '<span class="tx-gplus"><a href="'.$team_gplus.'"><i class="fa fa-google-plus"></i></a></span>';
                    	$member_loop .= '<span class="tx-skype"><a href="skype:'.$team_skype.'"><i class="fa fa-skype"></i></a></span>';
                    	$member_loop .= '<span class="tx-linkedin"><a href="'.$team_linkedin.'"><i class="fa fa-linkedin"></i></a></span>';
                	$member_loop .= '</div>';
            	$member_loop .= '</div>';
            	$member_loop .= '<div class="tx-team-content">';
            		$member_loop .= '<div class="tx-team-content-inner" style="">';
                		$member_loop .= '<h3 class="">'.$team_name.'</h3>';
                    	$member_loop .= '<div class="desig" style="color: '.$team_text_color.';">'.$team_desig.'</div>';
                	$member_loop .= '</div>';
            	$member_loop .= '</div>';      
    		$member_loop .= '</div>';
    	$member_loop .= '</div>';
		
		
		
		$member_no++;
	}
}

	
?>
<section id="team" class="txsec-team">

    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editbg"><?php _e( 'Backbround', 'txo' ) ?></span>
            <span class="editoptions"><?php _e( 'Options', 'txo' ) ?></span>
            <span class="editcontent"><?php _e( 'Contents', 'txo' ) ?></span>            
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=team_background' ); ?>" class="editbg"><?php _e( 'Backbround', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=team_options' ); ?>" class="editoptions"><?php _e( 'Options', 'txo' ) ?></a>
                <a href="<?php echo admin_url( 'customize.php?autofocus[section]=members' ); ?>" class="editcontent"><?php _e( 'Content', 'txo' ) ?></a>                
            </div>
        <?php }?>
	</div>
    
    <div class="team_inner">
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
        <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
        <div class="tx-fw-overlay" style="background-color: <?php echo $team_overlay_color; ?> ;">        
        <div class="tx-fw-content" style="color: <?php echo $team_text_color; ?>">
            <h2 class="testimonials-title" style="color: <?php echo $team_title_color; ?>"><?php echo $team_title; ?></h2>
            <h3 class="testimonials-subtitle" style="color: <?php echo $team_subtitle_color; ?>"><?php echo $team_subtitle; ?></h3>
            
                <div class="tx-team tx-4-column-team">
                
                    <?php echo $member_loop; ?>    
                                
                </div>               
            
        	<div class="clear"></div>
        </div>
        </div>
        </div>        
        </div>        
    </div>
</section>
<!--/team section-->

