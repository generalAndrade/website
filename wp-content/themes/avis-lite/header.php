<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div id="wrapper" class="skepage">
	
<div class="main-header-warpper">	
	<div id="main-head-wrap" class="clearfix">

		<div id="header_wrap" >
			<div id="header" class="skehead-headernav clearfix">
				<div class="glow">
					<div id="skehead">
						<div class="container">      
							<div class="row-fluid">      
								<!-- logo -->
								<div id="logo" class="span4">
									<?php if(get_theme_mod('avis_logo_img')){ ?>
										<div class="logo_inner">
											<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" style="display: table;line-height: 0;" ><img class="logo" src="<?php echo esc_url(get_theme_mod('avis_logo_img')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
										</div>
									<?php } else{ ?>
									
										<div id="site-title" class="logo_desp logo_inner">
											<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
											<div id="site-description"><?php bloginfo( 'description' ); ?></div>
										</div>
									<?php } ?>
								</div>
								<!-- // logo -->
								
								<!-- top-nav-menu --> 
								<div class="top-nav-menu span8">
									<div class="top-nav-menu" role="navigation">
										<?php 
											if( function_exists( 'has_nav_menu' ) && has_nav_menu( 'Header' ) ) {
												wp_nav_menu(array( 'container_class' => 'avis-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','menu' => 'Primary Menu','theme_location' => 'Header' )); 
											} else {
										?>
										<div class="avis-menu" id="skenav">
											<ul id="menu-main" class="menu">
												<?php wp_list_pages('title_li=&depth=0'); ?>
											</ul>
										</div>
										<?php } ?>
									</div>
								</div>
								<!-- // top-nav-menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-clone"></div>
		</div>
		

		<!-- BreadCrumb Section -->
		<div class="bread-title-holder">
			<div class="container">
				<div class="row-fluid">
					<div class="container_inner clearfix">
						<h1 class="title">
							<?php if( is_archive() ) {

									if ( is_day() ) :
										printf( __( 'Daily Archives : <span>%s</span>', 'avis-lite' ), get_the_date() );
									elseif ( is_month() ) :
										printf( __( 'Monthly Archives : <span>%s</span>', 'avis-lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'avis-lite' ) ) );
									elseif ( is_year() ) :
										printf( __( 'Yearly Archives : <span>%s</span>', 'avis-lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'avis-lite' ) ) );
									else :
										_e( 'Blog Archives', 'avis-lite' );
									endif;

								} else if (is_author()) {

									$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
								    _e('Author Archives : ','avis-lite'); echo esc_attr( $curauth->display_name );

								} elseif (is_category()) { 

									printf( __( 'Category Archives : %s', 'avis-lite' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								} elseif (is_search()) {

									printf( __( 'Search Results for : %s', 'avis-lite' ), '<span>' . get_search_query() . '</span>' );

								} elseif (is_tag()) {

									printf( __( 'Tag Archives : %s', 'avis-lite' ), '<span>' . single_tag_title( '', false ) . '</span>' );

								} elseif (is_home()) {

       								echo esc_attr( get_theme_mod('avis_blogpage_heading', __('Blog', 'avis-lite') ) );

								} elseif (is_404()) {

									_e('404', 'avis-lite');

								} else{ 

									the_title();

								}
							?>
							<span class="title-seperator"><span></span></span>
						</h1>
						<?php if ((class_exists('avis_lite_breadcrumb_class'))) { $avis_lite_breadcumb = new avis_lite_breadcrumb_class(); $avis_lite_breadcumb->avis_lite_custom_breadcrumb();} ?>
					</div>
				</div>
			</div>
		</div>
		<!-- // BreadCrumb Section -->
	</div>

	<?php get_template_part("includes/front-bgimage-section"); ?>
</div>

<div id="main" class="clearfix">