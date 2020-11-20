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

// Includes
include('includes/activate.php');
include('includes/init.php');
include('process/save-post.php');
// Hooks
register_activation_hook(__FILE__, 'h_activate_plugin');
add_action('init','hotel_init');
add_action('save_post_hotel','h_save_post_admin', 10, 3);
// Shortcodes
?>

