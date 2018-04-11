 <?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
					<h1><?php thecompany_header_title(); ?></h1>
					<div class="divider"></div>
				</div>

				<div class="breadcrumb-wrap">
					<div class="text-center">
						<?php  thecompany_breadcrumbs(); ?>
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
			<div class="col-md-9 col-sm-8">
				
				<!-- Single Post -->
				<?php 
				if(have_posts()):
					while(have_posts()): the_post(); 
							get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
								 ?>
						<div class="thecompany-pagination">
                            <?php the_posts_pagination( array(
                                'mid_size' => 2,
                                'prev_text' => __( '<<', 'thecompany' ),
                                'next_text' => __( '>>', 'thecompany' ),
                            ) ); ?>
                            </div>
				 	<?php else : 

						get_template_part( 'template-parts/content', 'none' );

				 endif; 
				?>


			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<!--====  End of Inner Page  ====-->

<?php

get_footer();
