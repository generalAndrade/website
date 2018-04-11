<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Interserver Platinum
 */

//  Doctype Declaration
if ( ! function_exists( 'interserver_platinum_doctype' ) ) :
	function interserver_platinum_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
	}
endif;
add_action( 'interserver_platinum_action_doctype', 'interserver_platinum_doctype', 10 );

// Header Codes
 if ( ! function_exists( 'interserver_platinum_head' ) ) :
function interserver_platinum_head() { ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif;
	}
endif;
add_action( 'interserver_platinum_action_head', 'interserver_platinum_head', 10 );

// Page Start
if ( ! function_exists( 'interserver_platinum_page_start' ) ) :
	function interserver_platinum_page_start() {
	?>
    <div id="page" class="hfeed site">
    <?php
	}
endif;
add_action( 'interserver_platinum_action_before_page', 'interserver_platinum_page_start' );

// Page End
if ( ! function_exists( 'interserver_platinum_page_end' ) ) :
	function interserver_platinum_page_end() {
	?></div><!-- #page --><?php
	}
endif;

add_action( 'interserver_platinum_action_after_page', 'interserver_platinum_page_end' );

// Header Top Bar.
if ( ! function_exists( 'interserver_platinum_header_top_bar' ) ) :
function interserver_platinum_header_top_bar() { 
	global $ip_default;
	$header_topbar = get_theme_mod('hide_header_topbar', $ip_default['hide_header_topbar']);
	$sticky_header = get_theme_mod('sticky_header',$ip_default['sticky_header']);
	$contact_no = get_theme_mod('contact_no', $ip_default['contact_no']); 
	$contact_email = get_theme_mod('contact_email', $ip_default['contact_email']);
	$fb_link = get_theme_mod('fb_link'); 
	$twit_link = get_theme_mod('twit_link');
	$gplus_link = get_theme_mod('gplus_link');
	$linked_link = get_theme_mod('linkedin_link');	
	
?>
<header id="masthead" class="site-header<?php if($sticky_header == $ip_default['sticky_header'] ){ echo ' '. esc_attr($sticky_header);}?>" role="banner">
<?php
if( !$header_topbar ) { ?>
<div class="header-top-wrapper">
    <div class="header-info">
    	<div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="left-info">
			<?php if(!empty($contact_no)){?>
            <span class="phone"><i class="fa fa-phone"></i><?php echo esc_html($contact_no); ?></span>
            <?php } ?> 
            <?php if(!empty($contact_email)){?>     
            <span class="email"><a href="mailto:<?php echo antispambot( sanitize_email( $contact_email ) ); ?>"><i class="fa fa-envelope "></i><?php echo antispambot( sanitize_email( $contact_email ) ); ?></a></span>
            <?php } ?> 
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="right-info">
            <div class="social-icons">
            <?php 
		    if (!empty($fb_link)) { ?>
            <a title="facebook" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"><i class="fa fa-facebook"></i></a> 
            <?php } ?>       
            <?php
            if (!empty($twit_link)) { ?>
            <a title="twitter" class="tw" target="_blank" href="<?php echo esc_url($twit_link); ?>"><i class="fa fa-twitter"></i></a>
            <?php } ?>     
            
            <?php
            if (!empty($gplus_link)) { ?>
            <a title="google-plus" class="gp" target="_blank" href="<?php echo esc_url($gplus_link); ?>"><i class="fa fa-google-plus"></i></a>
            <?php } ?>        
            <?php
             if (!empty($linked_link)) { ?> 
            <a title="linkedin" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"><i class="fa fa-linkedin"></i></a>
            <?php } ?>                   
        </div>
                </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<?php }
}
endif;
add_action( 'interserver_platinum_action_before_header', 'interserver_platinum_header_top_bar', 5);

// Header Start.
if ( ! function_exists( 'interserver_platinum_header_start' ) ) :
	function interserver_platinum_header_start() {
	?><div class="header-wrap"><div class="container"><div class="row"><?php
	}
endif;
add_action( 'interserver_platinum_action_before_header', 'interserver_platinum_header_start', 10);

// Header End.
if ( ! function_exists( 'interserver_platinum_header_end' ) ) :
	function interserver_platinum_header_end() {
	?></div><!-- End row --></div><!--End container --></div><!-- End header wrap --></header><!-- End header --><?php
	}
endif;
add_action( 'interserver_platinum_action_after_header', 'interserver_platinum_header_end', 5);


// Site Branding and Navigation
if ( ! function_exists( 'interserver_platinum_site_header' ) ) :
	function interserver_platinum_site_header() { ?> 
		<div class="col-md-4 col-sm-12 col-xs-12 logo-wrap">
		<?php if ( function_exists( 'the_custom_logo' ) && ( has_custom_logo() ) ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php the_custom_logo();?></a>
	<?php else : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
	<?php endif;?>
		</div>
	<div class="col-md-8 col-sm-12 col-xs-12 mobile-menu">
	<nav id="cssmenu" class="mainnav" role="navigation">
	<div id="head-mobile"></div>
     <div class="button"></div> 
		 <?php wp_nav_menu( array( 'theme_location'=> 'primary','container'=>'ul','menu_class'=>'main-menu')); ?>
	</div>
	</nav>
<?php }
endif;
add_action( 'interserver_platinum_action_header', 'interserver_platinum_site_header');


// Content Start
if ( ! function_exists( 'interserver_platinum_content_start' ) ) :
	function interserver_platinum_content_start() {
	?><div id="content" class="site-content"><div class="container"><div class="content-wrapper"><?php
	}
endif;
add_action( 'interserver_platinum_action_before_content', 'interserver_platinum_content_start' );

// Content End
if ( ! function_exists( 'interserver_platinum_content_end' ) ) :
	function interserver_platinum_content_end() {
	?></div><!-- .content-wrapper --></div><!-- .container --></div><!-- #content --><?php
	}
endif;
add_action( 'interserver_platinum_action_after_content', 'interserver_platinum_content_end' );

// Footer Start
if ( ! function_exists( 'interserver_platinum_footer_start' ) ) :
	function interserver_platinum_footer_start() { ?>
	<footer id="colophon" class="site-footer" role="contentinfo"><div class="container"><?php
	}
endif;
add_action( 'interserver_platinum_action_before_footer', 'interserver_platinum_footer_start', 10 );

// Footer End
if ( ! function_exists( 'interserver_platinum_footer_end' ) ) :
	function interserver_platinum_footer_end() { ?>
	</div><!-- .container --></footer><!-- #colophon --><?php
	}
endif;
add_action( 'interserver_platinum_action_after_footer', 'interserver_platinum_footer_end' );

