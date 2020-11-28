<?php 
function h_enqueue_scripts(){
    wp_register_style('h_rateit', plugins_url('/assets/rateit/rateit.css', HOTEL_PLUGIN_URL));
    wp_enqueue_style('h_rateit');

    wp_register_script(
        'h_rateit',
        plugins_url('/assets/rateit/jquery.rateit.min.js', HOTEL_PLUGIN_URL),
        ['jquery'],
        '1.0.0',
        true
    );
    wp_register_script(
        'h_main', plugins_url('/assets/js/main.js', HOTEL_PLUGIN_URL),['jquery'],'1.0.0', true
    );

    wp_localize_script('h_main', 'hotel_obj', ['ajax_url' => admin_url('admin-ajax.php')]);
    wp_enqueue_script('h_rateit');
    wp_enqueue_script('h_main');
}
?>