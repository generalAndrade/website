<?php
/**
 *
 * @package Interserver Platinum
*/
 
//Titles
class Interserver_Platinum_Info extends WP_Customize_Control {
    public $type = 'info';
    public $label = '';
    public function render_content() { ?>
    <h3 style="margin-top:30px;border:1px dashed;padding:10px;color:#000;background:#ccc;text-transform:uppercase;"><?php echo esc_html( $this->label ); ?></h3>
    <?php
    }
}    
function interserver_platinum_is_custom_slider_height(){
	global $ip_default;
    $slider_height = get_theme_mod( 'slider_height',$ip_default['slider_height']);
    if($slider_height == $ip_default['slider_height']) {
        return false;
    }
    return true;
}