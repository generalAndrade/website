/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

  // search title  
	wp.customize( 'search_title', function( value ) {
		value.bind( function( to ) {
			$( '.domain-finder-section .single h1' ).text( to );
		} );
	} );
	

	 // Why choose us  title  
	wp.customize( 'whychooseus_title', function( value ) {
		value.bind( function( to ) {
			$( '.why-choose-us .section-title h1' ).text( to );
		} );
	} );

 // overview  title  
	wp.customize( 'overview_title', function( value ) {
		value.bind( function( to ) {
			$( '.overview .section-title h1' ).text( to );
		} );
	} );
	// offer  title  
	wp.customize( 'offer_title', function( value ) {
		value.bind( function( to ) {
			$( '.what-we-offer .section-title h1' ).text( to );
		} );
	} );
	// pricing  title  
	wp.customize( 'pricing_title', function( value ) {
		value.bind( function( to ) {
			$( '.pricing-table .section-title h1' ).text( to );
		} );
	} );
	// pricing  content  
	wp.customize( 'pricing_Content', function( value ) {
		value.bind( function( to ) {
			$( '.pricing-table .info p' ).text( to );
		} );
	} );
	// copyright  content  
	wp.customize( 'thecompany_copyright_setting', function( value ) {
		value.bind( function( to ) {
			$( '.copyright .row .text-center' ).text( to );
		} );
	} );
	

	

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description, .logo-menu .main-menu .navbar-nav > li > a:hover,.logo-menu .dropdown-menu > li > a:hover , .logo-menu .dropdown-menu .dropdown .dropdown-menu > li > a:hover ' ).css( {
					'color': to
				} );
				$( '.logo-menu .main-menu .navbar-default .navbar-nav > .active > a ' ).css( {
					'background': to
				} );				
				
				
				
			}
		} );
	} );
} )( jQuery ); 
