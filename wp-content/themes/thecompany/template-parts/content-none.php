<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thecompany
 */

?>
<section class="inner-page">
<h4 class="hidden"><?php _e('inner page','thecompany');?></h4>
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-sm-12">
				<div class="not-found">
				<div class="section-title">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'thecompany' ); ?></h1>
					<div class="divider"></div>
				</div>
				<h2></h2>
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with <br>some different keywords.', 'thecompany' ); ?></p>
					<?php
						get_search_form();
				 	?>
				</div>
			</div>
			
		</div>
	</div>
</section>
