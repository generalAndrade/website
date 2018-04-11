<?php if (!function_exists('enigma_parallax_info_page')) {
	function enigma_parallax_info_page() {
	$page1=add_theme_page(__('Welcome to Enigma Parallax', 'enigma-parallax'), __('Pro Themes & Plugin', 'enigma-parallax'), 'edit_theme_options', 'enigma-parallax', 'parallax_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'parallax_admin_info');
	}	
}
add_action('admin_menu', 'enigma_parallax_info_page');

function parallax_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/css/bootstrap.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.css');
	//JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
	wp_enqueue_script('customjs',get_template_directory_uri().'/js/m_page-isotope.js' , array() ,true); 
	wp_enqueue_script( 'isotoppkgd', get_template_directory_uri().'/js/isotope.pkgd.js', array() ,true);
	wp_enqueue_style('isotope_css',get_template_directory_uri().'/css/isotope_css.css' , array() ,true);
} 
if (!function_exists('parallax_display_theme_info_page')) {
	function parallax_display_theme_info_page() { $theme_data = wp_get_theme(); ?>
<div class="wrap elw-page-welcome about-wrap seting-page">
	<div class="col-md-12 main-logo">
		<div class="col-md-10">
			<h1>Weblizar <span class="elw_shortcode_heading">Pro Themes & Plugins </span></h1>
			<div class="about-text">
				<?php _e("Congratulations! You are about to use Multipurpose Theme & Plugins, powered by ","enigma-parallax"); ?><span style="color:#00a0d2;"><b>Weblizar</b></span>
			</div>
		</div>
		<div class="col-md-2"><img style="width:268px;height:193px" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></div>
	    </div>
	<!-- Isotope -->
	<section>
    <div class="gallary animate-grid">
        <div class="containerr">
			<div class="row">
				<div class="col-xs-12" style="margin-top: 37px;">
					<div class="categories">
						<ul>							
							<li><a href="#" data-filter="*" class="active"><?php _e("All","enigma-parallax"); ?></a></li> 
							<li><a href="#" data-filter=".els_themes"><?php _e("Themes","enigma-parallax"); ?></a></li>			
							<li><a href="#" data-filter=".els_plugin"><?php _e("Plugins","enigma-parallax"); ?></a></li>			
						</ul>
						<div class="clearfix">  </div>
					</div>
				</div>
			</div>
	        <div class="row gallary-thumbs">
	            <div class="col-sm-6 col-md-12 els_themes content_div_data">
	                <div class="gallary-item">
	                	<a class="mainpage_shortcode" href="https://weblizar.com/themes/realestate-wordpress-premium-theme/" data-name="heading" data-shortcode="Heading">
		                	<div class="col-md-4">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/realstate.jpg" class="img-responsive" alt="...">
						 	</div>
						 	<div class="col-md-8">
						 		<h3 class="upgrade_title">RealEstate Premium  </h3>
									<p><strong>Tags: </strong>Property Portal , Property Management , Visitor/Agent Communication</p>
									<p><strong>Description: </strong>
									RealEstate is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page also present
									</p>
						 	</div>
						 </a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-12 els_themes content_div_data">
	                 <div class="gallary-item">
	                 	<a class="mainpage_shortcode" href="https://weblizar.com/themes/enigma-premium/" data-name="heading" data-shortcode="Heading">
	                 	<div class="col-md-4">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Enigma.jpg" class="img-responsive" alt="...">
						</div>
						<div class="col-md-8">
					 		<h3 class="upgrade_title">Enigma- Modern & Clean Designed Multi-Purpose WordPress Theme</h3>
							<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business,
							WordPress, Corporate, dark, real estate, shop, restaurant.</p>
							<p><strong>Description: </strong>
							Enigma is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page also present.</p>
					 	</div>
					 </a>
	                </div>
	            </div>

	            <div class="col-sm-6 col-md-12 els_plugin content_div_data">
	                <div class="gallary-item">
	                	<a class="mainpage_shortcode" href="https://weblizar.com/plugins/facebook-feed-pro/" data-name="heading" data-shortcode="Heading">
		                	<div class="col-md-4">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/6-light-box-facebook.jpg" class="img-responsive" alt="...">
							</div>
							<div class="col-md-8">
					 		<h3 class="upgrade_title">Facebook Feed Pro</h3>
								<p><strong>Features: </strong></p>
								<ol class="plugins_feature1">
									<li> Facebook profile, Page & Public Group feeds </li>
									<li> Unlimited Facebook feeds per page/post </li> 
									<li> 9+ Lightbox layouts </li> 
									<li> Unlimited shortcode </li> 
									<li> Unlimited Facebook feed widgets </li> 
									<li> Unlimited lightbox effects </li> 
									<li> Specific content facebook feeds </li> 
									<li> Css Loading effect: </li> 
								</ol>
								<ol class="plugins_feature2">
									<li> Css hover effect </li> 
									<li> Responsive layout </li> 
									<li>  Auto-update for feeds </li> 
									<li>  Top Level & Stream type comment display </li> 
									<li> Facebook redirection option </li> 
									<li> Filmstrip for lightbox </li> 
									<li> Customiz feeds Themes layout </li> 
									<li>  Sharing on facebook, Google plus, twitter </li> 
								</ol>
						 	</div>
					 	</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-12 els_plugin content_div_data">
	                 <div class="gallary-item">
	                 	<a class="mainpage_shortcode" href="https://weblizar.com/plugins/appointment-scheduler-pro/" data-name="heading" data-shortcode="Heading">
		                 	<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/images/appointment-scheduler-pro.jpg" class="img-responsive" alt="...">
							</div>
							<div class="col-md-8">
					 			<h3 class="upgrade_title">Appointment Schedulr Pro</h3>
								<p><strong>Features: </strong></p>
								<ol class="plugins_feature1">
									<li>Experience Responsive Scheduling</li>
									<li>Unlimited Bookings</li>
									<li>Unlimited Services</li>
									<li>Unlimited Staff</li>
									<li>Free Bookings</li>
								</ol>
								<ol class="plugins_feature2">
									<li>Premium Booking</li>
									<li>Statistical Administrator Dashboard</li>
									<li>Notification</li>
									<li>Admin Notification</li>
									<li>Staff Notification</li>
								</ol>
						 	</div>
					 	</a>
	                </div>
	            </div>
	            
	        </div>
	    </div>
	</div>
</section>
		<!-- end-->
<p class="elw-thank-you"><?php printf(__('%1s is proudly brought to you by %2s. If you like this WordPress theme, %3s.', 'enigma-parallax'),
			$theme_data->Name,
			'<a target="_blank" href="https://weblizar.com/" title="weblizar">Weblizar</a>',
			'<a target="_blank" href="https://wordpress.org/support/view/theme-reviews/weblizar" title="Enigma Parallax Review">' . __('rate it', 'enigma-parallax') . '</a>'); ?>
		</p>
</div>

<?php } } ?>