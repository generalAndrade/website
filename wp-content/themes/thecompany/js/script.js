jQuery('.carousel').carousel({
        interval: 5000 //changes the speed
    })

jQuery('[data-spy="scroll"]').each(function () {
  var $spy = jQuery(this).scrollspy('refresh')
})

jQuery(".scroll-top-wrapper").on("click", function() {
     jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
// Social share
      jQuery(document).ready(function(){
        jQuery('.main-btn').click(function(){
          jQuery('.float').toggleClass('floated');
          jQuery('.main-btn span').toggleClass('glyphicon-th-large');
          jQuery('.main-btn span').toggleClass('glyphicon-remove');
        });
    });
    jQuery(document).ready(function(){
        jQuery('.page-numbers.current').addClass('active');
    });



// Remove Placeholder
jQuery('input,textarea').focus(function(){
   jQuery(this).data('placeholder',jQuery(this).attr('placeholder'))
   jQuery(this).attr('placeholder','');
});
jQuery('input,textarea').blur(function(){
   jQuery(this).attr('placeholder',jQuery(this).data('placeholder'));
});


    //Tab to top
    jQuery(window).scroll(function($) {
    if (jQuery(this).scrollTop() > 1){  
        jQuery('.scroll-top-wrapper').addClass("show");
    }
    else{
        jQuery('.scroll-top-wrapper').removeClass("show");
    }
});
  


  //Sticky Header

jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 1){  
        jQuery('.logo-menu').addClass("sticky-menu");
    }
    else{
        jQuery('.logo-menu').removeClass("sticky-menu");
    }
});



// Animations
new WOW().init();