<?php  
$slidertalign = esc_attr(get_theme_mod('slider_text_align'));
$readmore     = esc_html(get_theme_mod('slider_read_more','Read More'));
 
    $sectionenable = esc_attr(get_theme_mod('slider_enable',1));
    if($sectionenable==1){
 ?>
 <?php if(esc_attr(get_theme_mod('home_slider_page_one')) == 0 && esc_attr(get_theme_mod('home_slider_page_two')) == 0 && esc_attr(get_theme_mod('home_slider_page_three')) == 0 ): ?>
 <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
             <?php
       $i=-1;
        $catId = absint(get_theme_mod('thecompany_slider_category_display',1));
         $postn = absint(get_theme_mod('slider_no_of_posts','3'));
        $query =new wp_Query
                    (
                            array
                            (
                            'post_type'     =>'post',
                            'posts_per_page'=>$postn,
                            'cat'           =>$catId
                            )
                    );
       if($query->have_posts()):while($query->have_posts()): $query->the_post();  $i++;
             if($i==0){$active= "active";}
             else {  $active= "";}       
         ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
            <?php endwhile; wp_reset_postdata();   endif; ?>
            
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
       <?php
        global $post;
       $i=-1;
        $catId = absint(get_theme_mod('thecompany_slider_category_display',1));
        $postn = absint(get_theme_mod('slider_no_of_posts','3'));
       $query =new wp_Query
                    (
                             array
                            (
                            'post_type'     =>'post',
                            'posts_per_page'=>$postn,
                            'cat'           =>$catId
                            )
                    );
       if($query->have_posts()):while($query->have_posts()): $query->the_post();
     
       $i++;
       if($i==0)
       { 
                $active= "active";
        }else
        {
                $active= "";
        }
        ?>

            <div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
            <div class="slider-overlay"></div>
            <?php if(has_post_thumbnail()):
                  $image       = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thecompany-slider' );
      
             ?>
                <div class="fill" style="background-image:url('<?php echo esc_url($image[0]); ?>');"></div>
            <?php endif; ?>
                <div class="carousel-caption outer ">
                     <div class="middle">
                         <div class="inner wow slideInDown <?php echo $slidertalign; ?>" data-wow-duration="1.5s">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                    <h5>
                    <?php if($readmore): ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-theme" title=""><?php echo esc_attr($readmore); ?></a>
                   <?php endif; ?>
                    </h5>
                    </div>
                    </div>
                </div>
            </div>
            <?php                 
                endwhile;
                    wp_reset_postdata();  
                endif;                             
                
            ?> 

           
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
 <?php else: ?>
        <header id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
   
                          $i=-1;
                          $sliderp[0] = absint(get_theme_mod('home_slider_page_one'));
                          $sliderp[1] = absint(get_theme_mod('home_slider_page_two'));
                          $sliderp[2] = absint(get_theme_mod('home_slider_page_three'));

                      
                              $args = array (
                                  'post_type' => 'page',
                                  'post_per_page' => 3,
                                  'post__in'         => $sliderp,
                                  'orderby'           =>'post__in',
                                );

                              $sliderloop = new WP_Query($args);

                              
                        if ($sliderloop->have_posts()) :  while ($sliderloop->have_posts()) : $sliderloop->the_post(); $i++;
                               if($i==0){$active= "active";}
                        else {  $active= "";} 
                              
                    ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
                    <?php endwhile; wp_reset_postdata();   endif; ?>
                    
                </ol>

                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
        <?php
                global $post;
      
                  $i=-1;
                  $sliderp[0] = absint(get_theme_mod('home_slider_page_one'));
                  $sliderp[1] = absint(get_theme_mod('home_slider_page_two'));
                  $sliderp[2] = absint(get_theme_mod('home_slider_page_three'));

              
                      $args = array (
                          'post_type' => 'page',
                          'post_per_page' => 3,
                          'post__in'         => $sliderp,
                          'orderby'           =>'post__in',
                        );

                      $sliderloop = new WP_Query($args);

                      
            if ($sliderloop->have_posts()) :  while ($sliderloop->have_posts()) : $sliderloop->the_post(); $i++;
                       if($i==0){$active= "active";}
                       else {  $active= "";}  
            
        
        ?>
                    <div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
                    <div class="slider-overlay"></div>
                    <?php if(has_post_thumbnail()):
                          $image       = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thecompany-slider' );
              
                     ?>
                        <div class="fill" style="background-image:url('<?php echo $image[0]; ?>');"></div>
                    <?php endif; ?>
                        <div class="carousel-caption outer ">
                             <div class="middle">
                                 <div class="inner wow slideInDown <?php echo $slidertalign; ?>" data-wow-duration="1.5s">
                            <h1><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                            <h5>
                             <?php if($readmore): ?>
                              <a href="<?php the_permalink(); ?>" class="btn btn-theme" title=""><?php echo $readmore; ?></a>
                             <?php endif; ?>
                            </h5>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php                 
                        endwhile;
                            wp_reset_postdata();  
                        endif;                             
                        
                    ?> 

                   
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>

<?php endif;?>
<?php }?>