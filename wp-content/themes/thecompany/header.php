<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thecompany
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

    	<section class="logo-menu">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-3">
							<?php
							if (has_custom_logo()){
							?>
									<div class="logo">
    									
    									<?php the_custom_logo(); ?>
    									
                                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"rel="home"><?php bloginfo('name'); ?></a></h1>
                                        <p class="site-description"><?php bloginfo('description');?></p>   
									</div>
							<?php 
							}else{ ?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"rel="home"><?php bloginfo('name'); ?></a></h1>
									<p class="site-description"><?php bloginfo('description');?></p>
							<?php }?>
    					
    				</div>
    				<div class="col-md-9 col-sm-9">
    					<div class="main-menu">
    						<nav class="navbar navbar-default" role="navigation">
    							
    							<div class="navbar-header">
    								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    									<span class="sr-only"><?php _e('Toggle navigation','thecompany');?></span>
    									<span class="icon-bar"></span>
    									<span class="icon-bar"></span>
    									<span class="icon-bar"></span>
    								</button>
    							</div>
    						
    							
    							<div class="collapse navbar-collapse navbar-ex1-collapse">
    								<ul class="nav navbar-nav navbar-right">
    									 <?php
						                    wp_nav_menu( array(
						                      'theme_location'    => 'primary',
						                      'depth'             => 8,
						                      'container'         => 'div',
						                      'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
						                      'container_id'      => 'bs-example-navbar-collapse-1',
						                      'menu_class'        => 'nav navbar-nav navbar-right',
						                      'fallback_cb'       => 'Thecompany_wp_bootstrap_navwalker::fallback',
						                      'walker'            => new Thecompany_wp_bootstrap_navwalker()
						                      ));
						                    
						                    ?><!--/.nav-collapse -->     
    								</ul>
    							</div>
    						</nav>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
