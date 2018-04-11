<?php 
	$avis_lite_primary_color ="";

function avis_lite_skeHex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 

	$avis_lite_primary_color = esc_attr( get_theme_mod('avis_pri_color','#0bbcee') );
	$avis_lite_secondary_scheme = esc_attr( get_theme_mod('avis_sec_color', '#353b48') );
	
	$avis_lite_bread_background = 'url("'.esc_url(get_theme_mod('avis_bread_img', '')).'") '.esc_attr(get_theme_mod('avis_bread_repeat', 'no-repeat')).' '.esc_attr(get_theme_mod('avis_bread_position', 'center'));

	$avis_lite_logo_wdth = esc_attr( get_theme_mod('avis_logo_width', '120') );
	$avis_lite_logo_hght = esc_attr( get_theme_mod('avis_logo_height', '40') );
	
	$rgb=array();
	$rgb = avis_lite_skeHex2RGB($avis_lite_secondary_scheme);
	$R = $rgb['red'];
	$G = $rgb['green'];
	$B = $rgb['blue'];
	$avis_lite_rgbcolor = "rgba(". $R .",". $G .",". $B .",.4)";
	$avis_lite_bdrrgbcolor = "rgba(". $R .",". $G .",". $B .",.7)";


	$hrgb = avis_lite_skeHex2RGB($avis_lite_primary_color);
	$hR = $hrgb['red'];
	$hG = $hrgb['green'];
	$hB = $hrgb['blue'];
	$hrgbcolor = "rgba(". $hR .",". $hG .",". $hB .",.7)";

	$avis_lite_background_size = esc_attr( get_theme_mod('avis_background_size', 'auto') );

?>
<style type="text/css">

	body.custom-background { background-size: <?php echo $avis_lite_background_size; ?>; }
	/**************** LOGO SIZE ***************/
	.skehead-headernav .logo{width:<?php if(isset($avis_lite_logo_wdth)){ echo $avis_lite_logo_wdth; } ?>px;height:<?php if(isset($avis_lite_logo_hght)){ echo $avis_lite_logo_hght; } ?>px;}

	/***************** THEME *****************/

	/*************** TOP HEADER **************/
	<?php if(!get_header_image()) { ?>
		.front-page #header.skehead-headernav{ background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;} 
		.front-page #main-head-wrap{ position: inherit; }
	<?php } ?>
	<?php if( !display_header_text() ) { ?>
		#logo #site-title { display: none; }
	<?php } ?>
	.topbar_info:hover i,
	#footer .third_wrapper a:hover,
	.avis-footer-container ul li:hover:before,
	.avis-footer-container ul li:hover > a,
	.twitter_box a, .skepost-meta .comments a{color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}

	.leftsquare:after, .rightsquare:before {background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }
	.avis_price_table .price_table_inner .price_button a:hover {border: 1px solid <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	.mid-box:hover .avis-iconbox.iconbox-top .iconbox-icon {background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}
	.avis-section h2.section_heading, .about-avis-section h2.section_heading {color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}
	.we_are_here_html .inner_html .fa, .map_overlay_text .fa,
	.service-icon i,.bread-title-holder a,#wp-calendar a:hover,
	ul.protfolio_details li .fa,#wrapper .hsearch .hsearch-close:hover,.flex-caption .slider-title,
	
	 {
	 	color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;
	 }

	 .iconbox-icon i, .avis-iconbox h4 {color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}

	#wp-calendar #next a:hover,#wp-calendar #prev a:hover,
	.contact-post h3,.contact-add strong,.services-avis-section h2.section_heading,
	.skepost-meta span:hover, .skepost-meta span:hover .fa, .skepost-meta span:hover a,h3#reply-title,#comments,.comment-author cite,
	.cont_nav_inner span { 
		color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;
	}
	.skepost-meta span:hover {
    	border-bottom-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;
	}
	.call_to_action .button-link.medium-button,
	#latest-project-section .port-readmore a.button-link,#sidebar .social li a:hover,
	.navigation .alignleft a,.navigation .alignright a,.seperator > span,.title-seperator > span,
	.contact-seperator > span {
		background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?> !important;
	}

	.call_to_action .button-link.medium-button:hover, 
	#latest-project-section .port-readmore a.button-link:hover,.navigation .alignleft a:hover,.navigation .alignright a:hover,.seperator {
		background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?> !important;
	}

	.parallax_inner_html h2,
	.services-inner-wrap:hover h3 > .fa, .services-inner-wrap:hover h3 > i {color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}
	#full-division-box .action-button {border-bottom: 1px solid <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }

	a.large-button, a.small-button, a.medium-button{background: none repeat scroll 0 0 <?php echo $avis_lite_primary_color; ?> !important;}
	a.large-button:hover, a.small-button:hover, a.medium-button:hover {background: none repeat scroll 0 0 <?php echo $avis_lite_secondary_scheme; ?> !important;}

	.contact-post .contact-add .fa, .quote_post .avis-quote .fa,
	.team-box-mid .team_overlay_content .title,
	.team-box-mid .team_overlay_content .team_prof,
	.team-box-mid .team_overlay_content .teamsocial a { color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	.gmap-close, #searchform .searchright:hover { background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}

	.navigation .nav-previous,
	.navigation .nav-next,
	ul.protfolio_details li .fa,
	#content .contact-left form input[type="submit"],
	.contact-post .contact-add .fa, #contact-gmap-toggle, .error-txt-first img,
	blockquote,.avis-quote,
	#wp-calendar tbody a,.widget_tag_cloud a:hover,.widget_product_tag_cloud a:hover,#respond input[type="submit"],.comments-template .reply a,
	#avis-paginate a,#header.skehead-headernav.skehead-headernav-shrink,#header.skehead-headernav.skehead-headernav-shrink #logo,
	.sktmenu-toggle {
		background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;
	}
	#avis-paginate a {border: 1px solid <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}
	.team-box-mid .team_overlay_content .teamsocial li:hover a {color:#ffffff; background-color:<?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }


	#full-twitter-box #bot-twitter .foot-tw-control-paging a.foot-tw-active,
	.avis_price_table .active_best_price,
	.navigation .nav-previous:hover,
	.navigation .nav-next:hover, #contact-gmap-toggle:hover, .postformat-gallerycontrol-nav li a.postformat-galleryactive,
	.flex-control-paging li a.flex-active{
		background-color:<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;
	}

	.filter a:hover,.filter li a.selected {color:<?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; border-bottom: 1px solid <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }
	#container-isotop .project_box:hover .portfolio_overlay {background-color: rgba(0, 0, 0, 0.8); }
	.port_single_link a,a#backtop {background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}
	.port_single_link a:hover{background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}

	.avis_price_table .price_table_inner ul li.table_title, .avis_price_table .price_table_inner ul li.prices,.continue a{background: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }
	.sticky-post {color :<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;border-color:<?php if(isset($avis_lite_bdrrgbcolor)){ echo $avis_lite_bdrrgbcolor; } ?>}
	.avis_price_table .price_table_inner .price_button a { border-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; background-color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }
	.social li a:hover{background: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}
	.social li a:hover:before{color:#fff; }
	.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover,a#backtop:hover,.slider-link a:hover,#respond input[type="submit"]:hover,.avis-ctabox div.avis-ctabox-button a:hover,#portfolio-division-box a.readmore:hover,.project-item .icon-image,.project-item:hover,.continue a:hover,#avis-paginate .avis-current,#avis-paginate a:hover,.postformat-gallerydirection-nav li a:hover,.comments-template .reply a:hover,#content .contact-left form input[type="submit"]:hover,.service-icon:hover,.avis-parallax-button:hover,.avis_price_table .price_table_inner .price_button a:hover,#content .avis-service-page div.one_third:hover .service-icon,#content div.one_half .avis-service-page:hover .service-icon  {background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	
	form input[type="text"],form input[type="email"],form input[type="password"],
	form input[type="url"],form input[type="tel"],
	form input[type="number"],form input[type="range"],
	form input[type="date"], form input[type="file"],form select,form textarea{color :<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>}

	form input[type="text"]:focus,form input[type="email"]:focus,
	form input[type="url"]:focus,form input[type="tel"]:focus,
	form input[type="number"]:focus,form input[type="range"]:focus,
	form input[type="date"]:focus,form input[type="file"]:focus,form textarea:focus {color :<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?> }
	form input[type="submit"]:hover{background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?> }

	#content .contact-left form input[type="text"],#content .contact-left form input[type="email"],
	#content .contact-left form input[type="url"],#content .contact-left form input[type="tel"],
	#content .contact-left form input[type="number"],#content .contact-left form input[type="range"],
	#content .contact-left form input[type="date"],#content .contact-left form input[type="file"],
	#content .contact-left form textarea,#content .contact-left form select
	{ border-bottom: 2px solid <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; color :<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>}

	#content .contact-left form textarea:focus,#content .contact-left form input[type="text"]:focus,
	#content .contact-left form input[type="email"]:focus, #content .contact-left form input[type="url"]:focus, 
	#content .contact-left form input[type="tel"]:focus, #content .contact-left form input[type="number"]:focus, 
	#content .contact-left form input[type="range"]:focus, #content .contact-left form input[type="date"]:focus, 
	#content .contact-left form input[type="file"]:focus,#content .contact-left form select:focus,
	form input[type="text"]:focus,form input[type="email"]:focus,form select:focus, 
	form input[type="url"]:focus,form input[type="tel"]:focus, form input[type="number"]:focus,form input[type="range"]:focus, 
	form input[type="date"]:focus,form input[type="file"]:focus,form textarea:focus {border-bottom: 2px solid <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}

	.avis-ctabox div.avis-ctabox-button a,#portfolio-division-box .readmore,.slider-link a,
	.avis_tab_v ul.avis_tabs li.active,.avis_tab_h ul.avis_tabs li.active,
	.service-icon,.avis-parallax-button,#avis-paginate a:hover,#avis-paginate .avis-current,
	.avis-iconbox .iconbox-content h4 hr {border-color:<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}

	.clients-items li a:hover{border-bottom-color:<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}
	a,.avis_widget ul ul li:hover:before,.avis_widget ul ul li:hover,.avis_widget ul ul li:hover a,.title a ,.skepost-meta a:hover,.post-tags a:hover,.entry-title a:hover,.readmore a:hover,#Site-map .sitemap-rows ul li a:hover ,.childpages li a,#Site-map .sitemap-rows .title,.avis_widget a,.avis_widget a:hover,#Site-map .sitemap-rows ul li:hover,.avis-title,span.team_name,.reply a, a.comment-edit-link,#full-subscription-box .sub-txt .first-word{color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;text-decoration: none;}
	.single #content .title,#content .post-heading,.childpages li ,.fullwidth-heading,#respond .required{color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;} 

	*::-moz-selection{background: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;color:#fff;}
	::selection {background: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;color:#fff;}
	#full-twitter-box,.progress_bar {background: none repeat scroll 0 0 <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}
	.avis-front-subs-widget input[type="submit"]{ background-color:<?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;color:#fff;}
	
	#skenav ul li.current_page_item > a,
	#skenav ul li.current-menu-ancestor > a,
	#skenav ul li.current-menu-item > a,
	#skenav ul li.current-menu-parent > a,
	#skenav ul li:hover > a {background-color:<?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }

	#skenav ul ul li.current_page_item a,
	#skenav ul ul li.current-menu-ancestor a,
	#skenav ul ul li.current-menu-item a,
	#skenav ul ul li.current-menu-parent a,
	#skenav ul ul li:hover a { background:none;}

	#skenav ul > li:hover::before,
	#skenav ul > li.current-menu-ancestor::before,
	#skenav ul > li.current-menu-item::before,
	#skenav ul > li.current-menu-parent::before,
	#skenav ul > li.current_page_item::before{ color: <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }

	#skenav ul ul li.current_page_item,
	#skenav ul ul li.current-menu-ancestor,
	#skenav ul ul li.current-menu-item,
	#skenav ul ul li.current-menu-parent,
	#skenav ul ul li:hover {border-bottom:1px solid <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>; }

	#searchform .searchright { background: none repeat scroll 0 0 <?php if(isset($avis_lite_primary_color)){ echo $avis_lite_primary_color; } ?>;}
	.avis-footer-container ul li {}
	.col-one .box .title, .col-two .box .title, .col-three .box .title, .col-four .box .title {color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?> !important;  }
	.avis-counter-h i, .error-txt,
	.error404 #searchform input[type="text"],
	.search #searchform input[type="text"], 
	#sidebar #searchform input[type="text"],#footer #searchform input[type="text"] {color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }

	<?php 
		
		if(get_theme_mod('avis_bread_img', '')) {	?>
				#main-head-wrap {background: <?php echo $avis_lite_bread_background; ?>}
			<?php  }
		else{
			?>
				#main-head-wrap{background: none repeat scroll 0 0 rgba(0, 0, 0, 0.6);}
	<?php } ?>

	#map_canvas .contact-map-overlay { <?php if(isset($_contact_map_bg_image)){ echo $_contact_map_bg_image; } else { ?>background-color: rgba(0, 0, 0, 0.8);<?php } ?> }

	@keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>}}
	@-webkit-keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>}}
	@-moz-keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>}}
	@-o-keyframes team_ttb{25%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_rgbcolor; } ?>} 100%{box-shadow:0 0 0 5px <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>}}
	
	.footer-seperator{background-color: rgba(0,0,0,.2);}
	#footer div.follow-icons li:hover a{background: none repeat scroll 0 0 <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?> !important;}
	#footer div.follow-icons .social li:hover a:before{color: #747474 !important; }

	.avis-iconbox.iconbox-top:hover .iconboxhover {  background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	section > h1 { color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	#avis-product-cat li > a { background-color: <?php if(isset($hrgbcolor)){ echo $hrgbcolor; } ?>; }
	#avis-product-cat .owl-buttons .owl-prev:hover, #avis-product-cat .owl-buttons .owl-next:hover, #avis-re-product .owl-buttons .owl-prev:hover, #avis-re-product .owl-buttons .owl-next:hover { background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; color: #fff; border: 1px solid <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>;}
	#avis-product-cat .owl-buttons .owl-prev, #avis-product-cat .owl-buttons .owl-next, #avis-re-product .owl-buttons .owl-prev, #avis-re-product .owl-buttons .owl-next { border: 1px solid <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; } 
	.header-cart > a { background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	#avis-re-product .item .overlay a.prolink:hover { background-color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	#content .featured-image-shadow-box .fa { color: <?php if(isset($avis_lite_secondary_scheme)){ echo $avis_lite_secondary_scheme; } ?>; }
	
	<?php if(isset($avis_hide_map) && $avis_hide_map === 'false' ){ ?>#map_canvas{display:none;}<?php } ?>
	<?php if(isset($avis_port_filter_hide) && $avis_port_filter_hide === 'false' ){ ?>#container-isotop{margin-top:0px !important;}<?php } ?>
	#map_canvas #map,#map_canvas{height:<?php if(isset($avis_map_height)){ echo $avis_map_height; } ?>px;}
 	<?php if(isset($avis_port_filter_hide) && $avis_port_filter_hide === 'false' ){ ?>#container-isotop{margin-top:0px !important;}<?php } ?>

	
	/********************** MAIN NAVIGATION PERSISTENT **********************/
	@media only screen and (max-width : 1025px) {
		#menu-main {
			display:none;
		}

		#header .container {
			width:97%;
		}
	}
</style>