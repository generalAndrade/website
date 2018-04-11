<?php get_header(); 
$wl_theme_options = enigma_parallax_get_options();
if ( $wl_theme_options['_frontpage']!= 1 ) {
	get_template_part('breadcrums'); ?>
	<div class="container">
		<div class="row enigma_blog_wrapper">
		<div class="col-md-8">
		<?php get_template_part('post','page'); ?>	
		</div>
		<?php get_sidebar(); ?>	
		</div>
	</div>	<?php
	} else {
		$wl_theme_options = enigma_parallax_get_options();
		if($wl_theme_options['slider_home'] == "1") {
			if($wl_theme_options['slider_choise']=='1')
			{
				get_template_part('home','slideshow');
			}else{
				get_template_part('home','slideshow-1');
			}
		}
		if($sections = json_decode(get_theme_mod('home_reorder'),true)) {
		foreach ($sections as $section) {
		$data = $section."_home";
		if($wl_theme_options[$data]=="1") {
		get_template_part('home', $section);
		}
	}
	} else {
		if($wl_theme_options['services_home'] == "1") {
		get_template_part('home','services'); 
		}
		if($wl_theme_options['portfolio_home'] == "1") {
			get_template_part('home','portfolio'); 
		}
		if($wl_theme_options['blog_home'] == "1") {
		get_template_part('home','blog');
		}
		if($wl_theme_options['team_home'] == "1") {
		get_template_part('home','team');
		}
}
		if($wl_theme_options['fc_home'] == "1") {
		get_template_part('footer','callout');
		}		
	}
	get_footer();
?>