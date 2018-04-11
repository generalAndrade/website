<?php
/**
* Template Name: Frontpage
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thecompany
 */

get_header(); 
             get_template_part( 'sections/slider');

             get_template_part( 'sections/whychooseus');  

             get_template_part( 'sections/search');                        

             get_template_part( 'sections/offer');

            
 get_footer(); 

?>