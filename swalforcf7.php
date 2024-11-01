<?php

/**
 * Plugin Name: Swal Alert for Contact Form 7 
 * Plugin URI: hi@canyildirim.com.tr
 * Description: Contact Form 7 messages merged with Swal Alert.
 * Version: 1.0
 * Author: Can Yildirim
 * Author URI: https://canyildirim.com.tr
 * License: GPL2
 */

function swalforcf7_scripts($hook) {
    wp_enqueue_script( 'swal_js', plugins_url( 'js/sweetalert.min.js', __FILE__ ), array(), '1.0.0', 'true');
    wp_enqueue_script( 'custom_js', plugins_url( 'js/swalforcf7.js', __FILE__ ), array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'swalforcf7_scripts');


?>