<?php 
function tr_widgets(){
    register_sidebar([
        'name' => __('My Sidebar', 'tourism'),
        'id' => 'tr_sidebar',
        'description' => __('Sidebar for my theme', 'tourism'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}
?>