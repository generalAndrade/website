<!-- Swiper -->
<?php $wl_theme_options = enigma_parallax_get_options();  ?>
<div class="swiper-container swiper-container-slider2">
  <div class="swiper-wrapper">
  	<?php for($i=1; $i<=3; $i++){ ?>
    <div class="swiper-slide">
    <img src="<?php echo esc_url($wl_theme_options['slide_image_'.$i]); ?>"/>
    <div class="container">
        <div class="carousel-caption">
          <?php if($wl_theme_options['slide_title_'.$i]!='') {  ?>
          <div class="carousel-text">
            <h1 class="animated animation animated-item-2 head_<?php echo $i ?>"><?php echo esc_attr($wl_theme_options['slide_title_'.$i]); ?></h1>     
            <?php if($wl_theme_options['slide_desc_'.$i]!='') {  ?>
            <ul class="list-unstyled carousel-list">
              <li class="animated animation animated-item-3 desc_<?php echo $i ?>"><?php echo get_theme_mod('slide_desc_'.$i , $wl_theme_options['slide_desc_'.$i]); ?></li>
            </ul>
            <?php }
            if($wl_theme_options['slide_btn_text_'.$i]!='') { ?>
              <a class="enigma_blog_read_btn  animation animated-item-3 rdm_<?php echo $i ?>" href="<?php if($wl_theme_options['slide_btn_link_'.$i]!='') { echo esc_url($wl_theme_options['slide_btn_link_'.$i]); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_'.$i]); ?></a>
            <?php } ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <!-- Add Pagination -->
 	<div class="swiper-pagination swiper'"></div>
    <div class="swiper-button-next swiper' swiper-button-next-cont swiper-button-white"></div>
    <div class="swiper-button-prev swiper' swiper-button-prev-cont swiper-button-white"></div>
</div>
<script type="text/javascript">
var mySwiper = new Swiper ('.swiper-container', {
  pagination: '.swiper-pagination',
  paginationClickable: true,

  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',

  // AutoPlay
  <?php if($wl_theme_options['slider_image_speed']!='') { ?>
  autoplay: <?php echo $wl_theme_options['slider_image_speed']; ?>,
  <?php } else { ?>
  autoplay: 2500,
  <?php } ?>
  // Loop
  loop: true,
  loopAdditionalSlides: 2,
  loopedSlides: 2,

  // Position
  slidesPerView: 'auto', //If "auto" or slidesPerView > 1, enable watchSlidesVisibility for lazy load

  // Keyboard and Mousewheel
  keyboardControl: true,
  mousewheelControl: true,
  mousewheelForceToAxis: true, // just use the horizontal axis to 

  // Lazy Loading 
  watchSlidesVisibility: true,
  preloadImages: false,
  lazyLoading: true,
})
</script>
<style type="text/css">
 .swiper-slide-active .animation.animated-item-2 {
    animation: 1200ms linear 900ms normal both 1 running <?php echo $wl_theme_options['animate_type_title']; ?>;
    }
.swiper-slide-active .animation.animated-item-3 {
  animation: 1200ms linear 900ms normal both 1 running <?php echo $wl_theme_options['animate_type_desc']; ?>;
  }
</style>