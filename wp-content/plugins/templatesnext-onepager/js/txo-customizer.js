// JavaScript Document

jQuery(document).ready(function($) {
	
	$('.customizer-shortcut').each(function() {	
		$(this).css('display', 'block');
		$('.customizer-shortcut-admin').css('display', 'none');
	});
	
	
	if( $('.ibanner').length > 0 ) {
		$( '.ibanner .slider-content-wrap' ).append( '<div class="editslider">Edit Slider</div>' );
	}		
});


(function(wp,$,api){ 
	
	api.bind( 'preview-ready', function() {
		
		//wp.customize.preview.bind( 'active', function() {
			//wp.customize.preview.send( 'please-do-this-for-me', 'first-param' );
		//});	
		
		// About Us Customizer Edits
		$( '#aboutus .editbg' ).on( "click", function() {			
			// Open About us background section wp.customize.section("aboutus_background").expand();
			wp.customize.preview.send( 'expand-aboutus-background-section' );			
		});			
		
		$( '#aboutus .editcontent' ).on( "click", function() {		
			// Open About us options section wp.customize.section("aboutus_options").expand();
			wp.customize.preview.send( 'expand-aboutus-options-section' );
		});

		// Services Customizer Edits
		$( '#services .editbg' ).on( "click", function() {			
			// Open About us background section wp.customize.section("aboutus_background").expand();
			wp.customize.preview.send( 'expand-services-background-section' );			
		});			
		
		$( '#services .editoptions' ).on( "click", function() {		
			// Open About us options section wp.customize.section("aboutus_options").expand();
			wp.customize.preview.send( 'expand-services-options-section' );
		});
		
		$( '#services .editcontent' ).on( "click", function() {		
			// Open About us options section wp.customize.section("aboutus_options").expand();
			wp.customize.preview.send( 'expand-services-content-panel' );
		});		

		// Portfolio Customizer Edits
		$( '#portfolio .editbg' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-portfolio-background-section' );			
		});			
		$( '#portfolio .editoptions' ).on( "click", function() {		
			wp.customize.preview.send( 'expand-portfolio-options-section' );
		});
		$( '#portfolio .editcontent' ).on( "click", function() {		
			wp.customize.preview.send( 'expand-portfolio-content-section' );
		});	
		
		// Blog Customizer Edits
		$( '#blog .editbg' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-blog-background-section' );			
		});			
		
		$( '#blog .editoptions' ).on( "click", function() {
			console.log("blog options clicked");
			wp.customize.preview.send( 'expand-blog-options-section' );
		});
		
		// Testimonials Customizer Edits
		$( '#testimonials .editbg' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-testimonials-background-section' );			
		});			
		$( '#testimonials .editoptions' ).on( "click", function() {		
			wp.customize.preview.send( 'expand-testimonials-options-section' );
		});
		$( '#testimonials .editcontent' ).on( "click", function() {		
			wp.customize.preview.send( 'expand-testimonials-content-section' );
		});
		
		// tEAM Customizer Edits
		$( '#team .editbg' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-team-background-section' );			
		});			
		$( '#team .editoptions' ).on( "click", function() {		
			wp.customize.preview.send( 'expand-team-options-section' );
		});
		$( '#team .editcontent' ).on( "click", function() {	
			wp.customize.preview.send( 'expand-team-content-section' );
		});	
		
		// Contact Us Customizer Edits
		$( '#contact .editoptions' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-contactus-options-section' );			
		});	
		
		// Call To Act Customizer Edits
		$( '#calltoact .editoptions' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-calltoact-options-section' );			
		});	
		
		// Custom page 1 Customizer Edits
		$( '#custompage1 .editoptions' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-custompage1-options-panel' );			
		});	
		
		// Pie chart Customizer Edits
		$( '#pie .editoptions' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-pie-options-panel' );			
		});	
		
		// Parallax 1 Customizer Edits
		$( '#parallax1 .editoptions' ).on( "click", function() {			
			wp.customize.preview.send( 'expand-parallax1-options-panel' );			
		});											
						
		// Parallax 1 Customizer Edits
		$( '.ibanner' ).on( "click", "div.editslider", function() {
			wp.customize.preview.send( 'expand-slider-options-panel' );			
		});											
						
		
		
			
	});



})(window.wp, jQuery, wp.customize);
/**/
