<?php 
    $sectionenable = esc_attr(get_theme_mod('whychooseus_enable',1));
    if($sectionenable==1){
     
        $title = esc_html(get_theme_mod('whychooseus_title',__('Why Choose Us','thecompany')));
       
 ?>
<section class="why-choose-us">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <div class="section-title">
                <div class="left-lines"></div>
                <div class="left-lines one"></div>
                <h1><?php echo $title; ?></h1>
                <div class="right-lines"></div>
                <div class="right-lines one"></div>
            </div>
            </div>
        </div>
        
        <div class="row">

         <?php 
         $i=-1;
                global $post;
             
                  $whychooseusp[0] = absint(get_theme_mod('thecompany_whychooseus_section_page1'));
                  $whychooseusp[1] = absint(get_theme_mod('thecompany_whychooseus_section_page2'));
                  $whychooseusp[2] = absint(get_theme_mod('thecompany_whychooseus_section_page3'));
                  $whychooseusp[3] = absint(get_theme_mod('thecompany_whychooseus_section_page4'));

                  $whychooseusi[0] = esc_attr(get_theme_mod('thecompany_whychooseus_section_icon1','fa fa-magic'));
                  $whychooseusi[1] = esc_attr(get_theme_mod('thecompany_whychooseus_section_icon2','fa fa-magic'));
                  $whychooseusi[2] = esc_attr(get_theme_mod('thecompany_whychooseus_section_icon3','fa fa-magic'));
                  $whychooseusi[3] = esc_attr(get_theme_mod('thecompany_whychooseus_section_icon4','fa fa-magic'));
                
                      $args = array (
                          'post_type' => 'page',
                          'post_per_page' => 4,
                          'post__in'         => $whychooseusp,
                          'orderby'           =>'post__in',
                        );

                      $serviceloop = new WP_Query($args);

                      
                      if ($serviceloop->have_posts()) :  while ($serviceloop->have_posts()) : $serviceloop->the_post();
                     $i++;
    ?>

            <div class="col-md-3 col-sm-6">
                <div class="single wow slideInUp">
                    <div class="icon">
                        <div class="inner">
                            <i class="<?php echo $whychooseusi[$i]; ?>"></i>
                        </div>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php                 
        endwhile;
        wp_reset_postdata();  
        endif;                             
        
        ?> 

        </div>
    </div>
</section>
<?php }?>