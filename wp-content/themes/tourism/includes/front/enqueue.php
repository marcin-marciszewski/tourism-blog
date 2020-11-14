<?php 
function tr_enqueue(){
    $uri = get_theme_file_uri();
    $ver = TR_DEV_MODE ? time() : false;

    wp_register_style('tr_google_fonts','https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap',[], $ver);
    wp_register_style('tr_bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',[], $ver);
    wp_register_style('tr_main_css', $uri . '/dist/main.css',[], $ver);

    wp_register_script('tr_fontawesome','https://kit.fontawesome.com/d86976839e.js',[],$ver, true);
    wp_register_script('tr_popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',['jquery'],$ver, true);
    wp_register_script('tr_boostrapjs','https://kit.fontawesome.com/d86976839e.js',['jquery','tr_popper'],$ver, true);
    wp_register_script('tr_main_js',$uri . '/dist/main.js',[],$ver, true);


    wp_enqueue_style('tr_google_fonts', );
    wp_enqueue_style('tr_jquery', );
    wp_enqueue_style('tr_bootstrap');
    wp_enqueue_style('tr_main_css');

    wp_enqueue_script('tr_fontawesome');
    wp_enqueue_script('jquery');
    wp_enqueue_script('tr_popper');
    wp_enqueue_script('tr_boostrapjs');
    wp_enqueue_script('tr_main_js');
}
?>