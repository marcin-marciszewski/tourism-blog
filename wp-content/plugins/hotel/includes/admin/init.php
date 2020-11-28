<?php 
function hotel_admin_init(){
    include('columns.php');
    add_filter('manage_hotel_posts_columns','h_add_new_hotel_columns');
    add_action('manage_hotel_posts_custom_column', 'h_manage_hotel_columns',10,2);
}
?>