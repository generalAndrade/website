<?php
    $slider = esc_attr(get_theme_mod('search_disable',1));
    if($slider==1){
        
 ?>
<section class="domain-finder-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="single text-center wow slideInUp">
                    <h1><?php echo esc_html(get_theme_mod('search_title',__('Search ','thecompany'))); ?></h1>
                  <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>