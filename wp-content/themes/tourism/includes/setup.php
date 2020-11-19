<?php 
function tr_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu('primary', __('Primary Menu', 'tourism'));

    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'tourism_header', 'description' => 'Tourism Header position') );
    }
}

?>