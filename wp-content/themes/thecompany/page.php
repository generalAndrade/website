<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thecompany
 */

get_header(); ?>

<section class="page-header overlay" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
					<div class="divider"></div>
				</div>

				<div class="breadcrumb-wrap">
					<div class="text-center">
						<?php echo  thecompany_breadcrumbs(); ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Header  ====-->



<!--================================
=            Inner Page            =
=================================-->

<section class="inner-page">
	<div class="container">
		<div class="row">
			<?php

			$sidebar = esc_attr(get_theme_mod('sidebar_position_page','right'));
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
				
				<!-- Single Post -->
				<?php 
				if(have_posts()):
					while(have_posts()): the_post(); 
							get_template_part( 'template-parts/content', 'page' );

					endwhile;
						
				 endif; 
				?>


			</div>
			<?php 
			if($sidebar=='right'){
				get_sidebar();
			}
			 ?>
		</div>
	</div>
</section>

<!--====  End of Inner Page  ====-->

<?php

get_footer();
