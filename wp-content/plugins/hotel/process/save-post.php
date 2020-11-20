<?php 
function h_save_post_admin($post_id, $post, $update){
    $hotel_data = get_post_meta($post_id, 'hotel_data', true);
    $hotel_data = empty($hotel_data) ? [] : $hotel_data;
    $hotel_data['rating'] = isset($hotel_data['rating']) ? absint($hotel_data['rating']) : 0;
    $hotel_data['rating_count'] = isset($hotel_data['rating_count']) ? absint($hotel_data['rating_count']) : 0;

    update_post_meta($post_id, 'hotel_data', $hotel_data);
}
?>