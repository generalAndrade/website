<?php

/***************** EXCERPT LENGTH ************/
function avis_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'avis_lite_excerpt_length');


/***************** READ MORE ****************/
function avis_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'avis_lite_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
add_filter( 'wp_title', 'avis_lite_title' );
function avis_lite_title($title)
{
	$avis_lite_title = $title;
	if ( is_home() && !is_front_page() ) {
		$avis_lite_title .= get_bloginfo('name');
	}

	if ( is_front_page() ){
		$avis_lite_title .=  get_bloginfo('name');
		$avis_lite_title .= ' | '; 
		$avis_lite_title .= get_bloginfo('description');
	}

	if ( is_search() ) {
		$avis_lite_title .=  get_bloginfo('name');
	}

	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$avis_lite_title .= __('Author: ','avis-lite');
		$avis_lite_title .= $curauth->display_name;
		$avis_lite_title .= ' | ';
		$avis_lite_title .= get_bloginfo('name');
	}

	if ( is_single() ) {
		$avis_lite_title .= get_bloginfo('name');
	}

	if ( is_page() && !is_front_page() ) {
		$avis_lite_title .= get_bloginfo('name');
	}

	if ( is_category() ) {
		$avis_lite_title .= get_bloginfo('name');
	}

	if ( is_year() ) { 
		$avis_lite_title .= get_bloginfo('name');
	}
	
	if ( is_month() ) {
		$avis_lite_title .= get_bloginfo('name');
	}

	if ( is_day() ) {
		$avis_lite_title .= get_bloginfo('name');
	}

	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$avis_lite_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$avis_lite_title .= get_bloginfo('name');
		}					
	}
	
	return $avis_lite_title;
}

/*********************************************
*   LIMIT WORDS
*********************************************/
function avis_lite_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}
