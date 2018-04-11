jQuery(window).load(function() {
 	// Animate loader off screen
	jQuery(".ip-loader").fadeOut("slow");
});

jQuery(document).ready(function(){
	"use strict";
	if( jQuery( '#slider' ).length > 0 ){
	jQuery('.nivoSlider').nivoSlider({
	effect:'fold',
	animSpeed: 500,
	pauseTime: 100,
	directionNav: true,
	controlNav: true,
	pauseOnHover:false,
	});
	}
});


/*// NAVIGATION CALLBACK
var ww = jQuery(window).width();
jQuery(document).ready(function() { 
	jQuery(".mainnav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".toggleMenu").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".mainnav").slideToggle('fast');
	});
	adjustMenu();
})

// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 992) {
		jQuery(".toggleMenu").css("display", "block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".mainnav").hide();
		} else {
			jQuery(".mainnav").show();
		}
		jQuery(".mainnav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".mainnav").show();
		jQuery(".mainnav li").removeClass("hover");
		jQuery(".mainnav li a").unbind('click');
		jQuery(".mainnav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}
 */
jQuery(window).scroll(function() {
  "use strict";
   var scroll = jQuery(window).scrollTop(); 
    if (scroll >= 110) {
        jQuery(".site-header").addClass("fixed");
	 }
	 else {
        jQuery(".site-header").removeClass("fixed");
    }

	if (scroll >= 800) {
        jQuery('.scrollup').addClass('show');
	 } else {
        jQuery('.scrollup').removeClass('show');
    }
	
});
jQuery('.scrollup').on('click', function() {
			jQuery("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
});
jQuery('.cta-button').on('click', function() {
			jQuery("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
});

( function( $ ) {
	 if (header_style == "centered"){
		 jQuery(".site-header").addClass("header-centered");
	 }else {
         jQuery(".site-header").removeClass("header-centered");
    }

    // Counter
jQuery('#ip-counter .sow-headline').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 6000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});
} )( jQuery );