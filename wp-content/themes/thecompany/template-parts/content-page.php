<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thecompany
 */

?>

			<div class="content">
				<?php
				 if(has_post_thumbnail()): 
					the_post_thumbnail();
				 endif; 
						the_content();
								
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'thecompany' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</div>
			<div class="entry-meta">
			    	<?php edit_post_link( __( 'Edit', 'thecompany' ), '<span class="edit-link">', '</span>' ); ?>
			  </div><!-- .entry-meta -->


