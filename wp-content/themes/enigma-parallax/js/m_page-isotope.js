jQuery(window).load(function() {
    var $container = jQuery('.animate-grid .gallary-thumbs');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
    jQuery('.animate-grid .categories a').click(function() {
        jQuery('.animate-grid .categories .active').removeClass('active');
        jQuery(this).addClass('active');
        var selector = jQuery(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});