<?php 
function h_filter_hotel_content($content){
    if(!is_singular('hotel')){
        return $content;
    }

    global $post, $wpdb;

    $hotel_data = $post->hotel_data;
    $hotel_html = file_get_contents('hotel-template.php', true);
    $hotel_html = str_replace('RATE_I18N', __("Rating","recipe"), $hotel_html);
    $hotel_html = str_replace('HOTEL_ID', $post->ID, $hotel_html);
    $rating  = !empty($hotel_data['rating']) ? $hotel_data['rating'] : 0 ;
    $hotel_html = str_replace('HOTEL_RATING', $rating, $hotel_html);
    $user_IP = $_SERVER['REMOTE_ADDR'];

    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "hotel_ratings` WHERE hotel_id= '" . $post->ID . "'  AND user_ip='" .$user_IP . "'");
    if($rating_count > 0){
        $hotel_html = str_replace('READONLY_PLACEHOLDER', 'data-rateit-READONLY="true"', $hotel_html);
    } else{
        $hotel_html = str_replace('READONLY_PLACEHOLDER', '', $hotel_html);
    }
    

    return $hotel_html . $content; 
}

?>