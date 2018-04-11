<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package thecompany
 */

get_header(); ?>
 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="page-header overlay" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h1><?php _e('404 ERROR','thecompany'); ?></h1>
					<div class="divider"></div>
				</div>

				<div class="breadcrumb-wrap">
					<div class="text-center">
				<?php
						thecompany_breadcrumbs();
                ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>


<!--================================
=            Inner Page            =
=================================-->

<section class="inner-page">
<h4 class="hidden"><?php _e('inner page','thecompany');?></h4>
	<div class="container">
		<div class="row">

			<?php

			$sidebar = esc_attr(get_theme_mod('sidebar_position_404','right'));
			if($sidebar=='left' || $sidebar=='right'){
				$class = 'col-md-9';
				
			}else{
				$class = 'col-md-12';
			}

			if($sidebar=='left'){
				get_sidebar();
			}
		 ?>
			<div class="<?php echo $class; ?> col-sm-8">
				<div class="error-page">
					<h3><?php _e('Oops!','thecompany'); ?></h3>
					<h4><?php _e('We can not seem to find the page you are looking for.','thecompany'); ?></h4>
					<h5><?php _e('Error code: 404','thecompany'); ?></h5>
					<h6><?php _e('Here are some helpful links instead:','thecompany'); ?></h6>
					<ul class="list-inline">
						<li><a href="<?php echo esc_url(home_url());?> " title=""><?php _e('Home','thecompany'); ?></a></li>
						
					</ul>
					<h2><strong><?php _e('404','thecompany'); ?></strong></h2>
				</div>
			</div>
			<?php 
			if($sidebar=='right'){
				get_sidebar();
			}
			 ?>
			
		</div>
	</div>
</section>
</div>

<?php
get_footer();
