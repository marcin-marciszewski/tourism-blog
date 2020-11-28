<?php 
/*
* Plugin Name: Hotel
* Description: A simple WordPress plugin that allows user to add hotels and rate them
* Version: 1.0
* Author: Marcin Marciszewski
* Author URI: https://marciszeswski.co.uk
* Text Domain: hotel
*/

if(!function_exists('add_action')){
    echo "No access";
    exit;
}

// Setup
define('HOTEL_PLUGIN_URL', __FILE__);
// Includes
include('includes/activate.php');
include('includes/init.php');
include('process/save-post.php');
include('process/filter-content.php');
include('process/rate-hotel.php');
include('includes/front/enqueue.php');
include('includes/admin/init.php');
// Hooks
register_activation_hook(__FILE__, 'h_activate_plugin');
add_action('init','hotel_init');
add_action('save_post_hotel','h_save_post_admin', 10, 3);
add_filter('the_content', 'h_filter_hotel_content');
add_action('wp_enqueue_scripts', 'h_enqueue_scripts',100);
add_action('wp_ajax_h_rate_hotel', 'h_rate_hotel');
add_action('wp_ajax_nopriv_h_rate_hotel', 'h_rate_hotel');
add_action('admin_init','hotel_admin_init');
// Shortcodes
?>

