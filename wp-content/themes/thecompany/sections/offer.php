<?php
    $slider = esc_attr(get_theme_mod('offer_enable',1));
    if($slider==1){
    $title      = esc_html(get_theme_mod('offer_title',__('What We Offer ','thecompany')));
        
 ?>
<?php if(esc_attr(get_theme_mod('thecompany_offer_section_page1')) == 0 && esc_attr(get_theme_mod('thecompany_offer_section_page2')) == 0 && esc_attr(get_theme_mod('thecompany_offer_section_page3')) == 0 && esc_attr(get_theme_mod('thecompany_offer_section_page4')) == 0 ): ?>
<section class="what-we-offer">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <div class="section-title">
                <div class="left-lines"></div>
                <div class="left-lines one"></div>
                <h1><?php echo  $title; ?></h1>
                <div class="right-lines"></div>
                <div class="right-lines one"></div>
            </div>
            </div>
        </div>

        <div class="row">
        <?php
        $offerid = absint(get_theme_mod('offer_category_display'));
        $cat = get_category($offerid);
        if ($cat) {
       
       $posts_per_page = absint(get_theme_mod('offer_no_of_posts',3));
        $args = array(
        'posts_per_page' => $posts_per_page,
        'paged' => 1,
        'cat' => $offerid
        );
        $loop = new WP_Query($args);

        $cn = 0;
        if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();$cn=$cn+1;
        ?>
            <div class="col-md-4 col-sm-6">
                <div class="single wow slideInUp">
                     <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <!--<h6>For very large application</h6>-->
                   <?php the_excerpt(); ?>
                </div>
            </div>
        <?php                 
        endwhile;
        if($cn%3==0){
            echo '<div class="clearfix"></div>';
        }
        wp_reset_postdata();  
        endif;                             
        }
        ?>

 
        </div>
    </div>
</section>
<?php else: ?>
<section class="what-we-offer">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <div class="section-title">
                <div class="left-lines"></div>
                <div class="left-lines one"></div>
                <h1><?php echo  $title; ?></h1>
                <div class="right-lines"></div>
                <div class="right-lines one"></div>
            </div>
            </div>
        </div>

        <div class="row">
        <?php 
        
                global $post;
             
                  $offerp[0] = absint(get_theme_mod('thecompany_offer_section_page1'));
                  $offerp[1] = absint(get_theme_mod('thecompany_offer_section_page2'));
                  $offerp[2] = absint(get_theme_mod('thecompany_offer_section_page3'));
                  $offerp[3] = absint(get_theme_mod('thecompany_offer_section_page4'));
                  $offerp[4] = absint(get_theme_mod('thecompany_offer_section_page5'));
                  $offerp[5] = absint(get_theme_mod('thecompany_offer_section_page6'));

                
                      $args = array (
                          'post_type' => 'page',
                          'post_per_page' => 6,
                          'post__in'         => $offerp,
                          'orderby'           =>'post__in',
                        );

                      $offerloop = new WP_Query($args);

                      $cn=0;
                      if ($offerloop->have_posts()) :  while ($offerloop->have_posts()) : $offerloop->the_post();
                        $cn=$cn+1;   
    ?>
            <div class="col-md-4 col-sm-6">
                <div class="single wow slideInUp">
                     <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <!--<h6>For very large application</h6>-->
                   <?php the_excerpt(); ?>
                </div>
            </div>
        <?php                 
        endwhile;
        if($cn%4==0){
            echo '<div class="clearfix"></div>';
        }
        wp_reset_postdata();  
        endif;                             
        
        ?>

 
        </div>
    </div>
</section>
<?php endif;?>
<?php }?>