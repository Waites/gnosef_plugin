<?php
   /*
   Plugin Name: GNOSEF Box Menu
   Plugin URI: http://
   Description: Creates shortcodes and settings menu for the box menu on GNOSEF site
   Version: 2.3
   Author: Jesse Hobson
   Author URI: http://www.safyyrephrogg.com
   License: GPL2
   */
$ver = 2.1;
include 'settings.php';

    wp_register_style( 'gnobox_stylesheet', plugin_dir_url( __FILE__ ) . "gnobox.css", '', $ver, 'all' );
    //wp_register_script( 'gnobox_js', plugin_dir_url( __FILE__ ) . "gnobox.js");
    wp_enqueue_style(gnobox_stylesheet);
    //wp_enqueue_script(gnobox_js);

  function gnobox_link_shortcode() {
	 global $box1,$box2,$box3;
    return '
    <div class="one_third">
      <div class="clearfix gnobox gno" onclick="javascript:location.href=\''.$box1->link.'\';" style="cursor: pointer;">
        <img class="gnoimg" src="'.$box1->img.'" />
        <div class="gnotext">
          <h4>'.$box1->title.'</h4>
          '.$box1->text.'
        </div>
      </div>
    </div>

    <div class="one_third">
      <div class="clearfix gnobox gno" onclick="javascript:location.href=\''.$box2->link.'\';" style="cursor: pointer;">
        <img class="gnoimg" src="'.$box2->img.'" />
        <div class="gnotext">
          <h4>'.$box2->title.'</h4>
          '.$box2->text.'
        </div>
      </div>
    </div>

    <div class="one_third last">
      <div class="clearfix gnobox gno" onclick="javascript:location.href=\''.$box3->link.'\';" style="cursor: pointer;">
        <img class="gnoimg" src="'.$box3->img.'" />
        <div class="gnotext">
          <h4>'.$box3->title.'</h4>
          '.$box3->text.'
        </div>
      </div>
    </div>';
}
add_shortcode('gnobox', 'gnobox_link_shortcode');
?>