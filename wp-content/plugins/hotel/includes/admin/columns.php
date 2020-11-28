<?php 
function h_add_new_hotel_columns($columns){
    $new_columns = [];
    $new_columns['cb'] = '<input type="checkbox" />';
    $new_columns['title'] = __('Title', 'hotel'); 
    $new_columns['author'] = __('Author', 'hotel'); 
    $new_columns['categories'] = __('Categories', 'hotel'); 
    $new_columns['count'] = __('Rating count', 'hotel'); 
    $new_columns['rating'] = __('Average Rating', 'hotel'); 
    $new_columns['date'] = __('Date', 'hotel'); 
    
    return $new_columns;
}

function h_manage_hotel_columns($column, $post_id){
    switch($column){
        case 'count':
            $hotel_data = get_post_meta($post_id,'hotel_data', true);
            echo isset($hotel_data['rating_count']) ? $hotel_data['rating_count'] : 0;
            break;
        case 'rating':
            $hotel_data = get_post_meta($post_id,'hotel_data', true);
            echo isset($hotel_data['rating']) ? $hotel_data['rating'] : 'N/A';
            break;
        default:
            break;
    }
}
?>