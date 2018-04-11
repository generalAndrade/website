<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thecompany
 */

?>

	<footer>
     <?php if(get_theme_mod('facebook_textbox')  || get_theme_mod('twitter_textbox') || get_theme_mod('google_plus_textbox') ||get_theme_mod('youtube_textbox') || get_theme_mod('youtube_textbox') || get_theme_mod('skype_textbox') ||get_theme_mod('pinterest_textbox') || get_theme_mod('instagram_textbox')       ): ?>
    <section class="footer">
        <div class="container">
            <div class="row">
                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <div class="col-sm-12">
                        <div class="footer-menu text-center wow slideInUp">
                            
                            <?php wp_nav_menu( array('theme_location'=>'footer','menu_class'=>'list-inline') ); ?>
                        </div>
                    </div>
                <?php endif;?>

                <div class="col-sm-12">
                    <div class="social-media text-center wow slideInUp">
                        <ul class="list-inline">
                        <?php if(get_theme_mod('facebook_textbox','#')): ?>
                            <li><a target="_blank" href="<?php echo esc_url(get_theme_mod('facebook_textbox','#')); ?>" title=""><i class="fa fa-facebook"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('twitter_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('twitter_textbox','#')); ?>" title=""><i class="fa fa-twitter"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('google_plus_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('google_plus_textbox','#')); ?>" title=""><i class="fa fa-google-plus"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('linkedin_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('linkedin_textbox','#')); ?>" title=""><i class="fa fa-linkedin"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('youtube_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('youtube_textbox','#')); ?>" title=""><i class="fa fa-youtube"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('skype_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('skype_textbox','#')); ?>" title=""><i class="fa fa-skype"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('pinterest_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('pinterest_textbox','#')); ?>" title=""><i class="fa fa-pinterest"></i></a></li>
                            <?php endif;?>
                        <?php if(get_theme_mod('instagram_textbox','#')): ?>
                            <li><a target="_blank"  href="<?php echo esc_url(get_theme_mod('instagram_textbox','#')); ?>" title=""><i class="fa fa-instagram"></i></a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <?php echo esc_html(get_theme_mod('thecompany_copyright_setting',__('&copy; 2016 All Rights Reserved ','thecompany'))); echo bloginfo(); ?>
                </div>
                <div class="col-sm-6 text-center">
                   <?php echo __('Design by','thecompany'); ?> <a href="http://oceanwebthemes.com"><?php echo __('Ocean Web Themes','thecompany'); ?> </a>
                </div>
            </div>
        </div>
    </section>
</footer>
    <?php 
            $scroll = esc_attr(get_theme_mod('thecompany_scrollup_setting','0'));
            if($scroll==1){
    ?>
      
    <?php }else{?>
<div class="scroll-top-wrapper"> <span class="scroll-top-inner">
        <i class="fa fa-angle-double-up"></i>
    </span></div>
    <?php } ?>

<?php wp_footer(); ?>
      
</body>
</html>