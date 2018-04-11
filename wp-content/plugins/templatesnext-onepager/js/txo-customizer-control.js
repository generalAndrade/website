// JavaScript Document

(function($,api){ 
	
	wp.customize.bind('ready', function() {		
		
		//wp.customize.previewer.bind( 'please-do-this-for-me', function(params){
			//console.log('OK, I\'ll do it', params);
		//} );
		
		// Open About us background section 
		wp.customize.previewer.bind( 'expand-aboutus-background-section', function(){
			wp.customize.section("aboutus_background").expand({ allowMultiple: false });
		});	
		
		// Open About us options section 
		wp.customize.previewer.bind( 'expand-aboutus-options-section', function(){
			wp.customize.section("aboutus_options").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open Services background section 
		wp.customize.previewer.bind( 'expand-services-background-section', function(){
			wp.customize.section("services_background").expand({ allowMultiple: false });
		});	
		
		// Open Services options section 
		wp.customize.previewer.bind( 'expand-services-options-section', function(){
			wp.customize.section("services_options").expand({ allowMultiple: false });
		});	
		
		// Open Services options section 
		wp.customize.previewer.bind( 'expand-services-content-panel', function(){
			wp.customize.panel("services").expand({ allowMultiple: false });
		});			
		
		//===========================================================================
		// Open Portfolio background section 
		wp.customize.previewer.bind( 'expand-portfolio-background-section', function(){
			wp.customize.section("portfolio_background").expand({ allowMultiple: false });
		});	
		
		// Open Portfolio options section 
		wp.customize.previewer.bind( 'expand-portfolio-options-section', function(){
			wp.customize.section("portfolio_options").expand({ allowMultiple: false });
		});	
		
		// Open Portfolio options section 
		wp.customize.previewer.bind( 'expand-portfolio-content-section', function(){
			wp.customize.section("portfolios").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open Blog background section 
		wp.customize.previewer.bind( 'expand-blog-background-section', function(){
			wp.customize.section("blog_background").expand({ allowMultiple: false });
		});	
		
		// Open Blog options section 
		wp.customize.previewer.bind( 'expand-blog-options-section', function(){
			wp.customize.section("blog_options").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open Testimonials background section 
		wp.customize.previewer.bind( 'expand-testimonials-background-section', function(){
			wp.customize.section("testimonials_background").expand({ allowMultiple: false });
		});	
		
		// Open Testimonials options section 
		wp.customize.previewer.bind( 'expand-testimonials-options-section', function(){
			wp.customize.section("testimonials_options").expand({ allowMultiple: false });
		});	
		
		// Open Testimonials options section 
		wp.customize.previewer.bind( 'expand-testimonials-content-section', function(){
			wp.customize.section("testimonial").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open Call To Act background section 
		wp.customize.previewer.bind( 'expand-calltoact-background-section', function(){
			wp.customize.section("calltoact_background").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open team background section 
		wp.customize.previewer.bind( 'expand-team-background-section', function(){
			wp.customize.section("team_background").expand({ allowMultiple: false });
		});	
		
		// Open team options section 
		wp.customize.previewer.bind( 'expand-team-options-section', function(){
			wp.customize.section("team_options").expand({ allowMultiple: false });
		});	
		
		// Open team options section 
		wp.customize.previewer.bind( 'expand-team-content-section', function(){
			wp.customize.section("members").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open Contact Us options section 
		wp.customize.previewer.bind( 'expand-contactus-options-section', function(){
			wp.customize.section("contact").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open Call to act options section 
		wp.customize.previewer.bind( 'expand-calltoact-options-section', function(){
			wp.customize.section("calltoact").expand({ allowMultiple: false });
		});
		
		//===========================================================================
		// Open Custom page 1 panel section 
		wp.customize.previewer.bind( 'expand-custompage1-options-panel', function(){
			wp.customize.panel("custompage1").expand({ allowMultiple: false });
		});
		
		//===========================================================================
		// Open pie chart panel section 
		wp.customize.previewer.bind( 'expand-pie-options-panel', function(){
			wp.customize.panel("pie").expand({ allowMultiple: false });
		});
		
		//===========================================================================
		// Open parallax 1 panel 
		wp.customize.previewer.bind( 'expand-parallax1-options-panel', function(){
			wp.customize.panel("parallax1").expand({ allowMultiple: false });
		});	
		
		//===========================================================================
		// Open slider panel 
		wp.customize.previewer.bind( 'expand-slider-options-panel', function(){
			wp.customize.panel("slider").expand({ allowMultiple: false });
		});																													
	
	});		
	
})(jQuery, wp.customize);
