<?php
$_featured_heading = wp_kses_post( get_theme_mod('avis_home_feature_sec_title', __('Features', 'avis-lite') ) );
$_featured_desc = wp_kses_post( get_theme_mod('avis_home_feature_sec_desc', __('All of our features created with functionality and design in mind.', 'avis-lite') ) );

if (get_theme_mod('avis_home_feature_sec','on') == 'on' ) {
?>

<div id="featured-box" class="avis-section">

	<!-- container -->
	<div class="container">

		<div class="sections_inner_content">
			<?php if (isset($_featured_heading) && $_featured_heading !='') { ?><h2 class="section_heading"><?php echo $_featured_heading; ?></h2><?php } ?>
			<?php if (isset($_featured_desc) && $_featured_desc !='') { ?><div class="section_description"><?php echo do_shortcode($_featured_desc); ?></div><?php } ?>
			<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div>
		</div>
		
		<!-- row-fluid -->
		<ul class="mid-box-mid row-fluid">
				<?php if( is_active_sidebar('home-featured-sidebar') ) { ?>
					<?php dynamic_sidebar( 'home-featured-sidebar' ); ?>	
				<?php } else { ?>
					<li class="avis-container mid-box span4 fade_in_hide element_fade_in avis_start_animation">              					
            <!-- Featured Box  -->                
                <div class="avis-iconbox iconbox-top">      
                <div class="iconbox-icon avis-viewport">
                    <div class="featured_inner">
                        <div class="featured_icon">   
                                <i class="fa fa fa-user"></i>
                        </div>
                        <h4><a href="#"><?php _e('EMPLOYMENT AND SKILLS', 'avis-lite'); ?></a></h4>
                    </div>
                </div>
                <div class="iconbox-content"><?php _e('At Business Hub, we make sure you get the right connect with your prospective employees, and even the right candidates to run your companies. We have skilled back end team to churn out and polish the best available skilled people in the industry.', 'avis-lite'); ?></div>          
                <div class="clearfix"></div>        
            </div>
            </li>                    <li class="avis-container mid-box span4 fade_in_hide element_fade_in avis_start_animation">              					
            <!-- Featured Box  -->                
                <div class="avis-iconbox iconbox-top">      
                <div class="iconbox-icon avis-viewport">
                    <div class="featured_inner">
                        <div class="featured_icon">   
                                <i class="fa fa fa-location-arrow"></i>
                        </div>
                        <h4><a href="#"><?php _e('INVESTMENT SOLUTIONS', 'avis-lite'); ?></a></h4>
                    </div>
                </div>
                <div class="iconbox-content"><?php _e('Whether you need funding or you want to invest, we  master in every art. We tread through the global market, apply best available research mechanisms and derive the best investment avenues to let you grow and prosper high in the business world.', 'avis-lite'); ?></div>          
                <div class="clearfix"></div>        
            </div>
            </li>                    <li class="avis-container mid-box span4 fade_in_hide element_fade_in avis_start_animation">              					
            <!-- Featured Box  -->                
                <div class="avis-iconbox iconbox-top">      
                <div class="iconbox-icon avis-viewport">
                    <div class="featured_inner">
                        <div class="featured_icon">   
                                <i class="fa fa fa-money"></i>
                        </div>
                        <h4><a href="#"><?php _e('OUTSOURCING PROGRAMS', 'avis-lite'); ?></a></h4>
                    </div>
                </div>
                <div class="iconbox-content"><?php _e('We lead a team of expert people to choose the best available resources in the job market and logistical outsourcing. We always carry our confidence to come out with some of the finest outsourcing methodologies that work wonders for every business.', 'avis-lite'); ?></div>          
                <div class="clearfix"></div>        
            </div>
            </li>          	
				<?php } ?>
			<div class="clearfix"></div>
		</ul>
		<!-- row-fluid -->
		
	</div>
	<!-- container -->
</div>
<?php } ?>