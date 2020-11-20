<?php 
function hotel_init(){
    $labels = array(
        'name'                  => _x( 'Hotels', 'Post type general name', 'hotel' ),
        'singular_name'         => _x( 'Hotel', 'Post type singular name', 'hotel' ),
        'menu_name'             => _x( 'Hotels', 'Admin Menu text', 'hotel' ),
        'name_admin_bar'        => _x( 'Hotel', 'Add New on Toolbar', 'hotel' ),
        'add_new'               => __( 'Add New', 'hotel' ),
        'add_new_item'          => __( 'Add New Hotel', 'hotel' ),
        'new_item'              => __( 'New Hotel', 'hotel' ),
        'edit_item'             => __( 'Edit Hotel', 'hotel' ),
        'view_item'             => __( 'View Hotel', 'hotel' ),
        'all_items'             => __( 'All Hotels', 'hotel' ),
        'search_items'          => __( 'Search Hotels', 'hotel' ),
        'parent_item_colon'     => __( 'Parent Hotels:', 'hotel' ),
        'not_found'             => __( 'No books found.', 'hotel' ),
        'not_found_in_trash'    => __( 'No books found in Trash.', 'hotel' ),
        'featured_image'        => _x( 'Hotel Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'hotel' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'hotel' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'hotel' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'hotel' ),
        'archives'              => _x( 'Hotel archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'hotel' ),
        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'hotel' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'hotel' ),
        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'hotel' ),
        'items_list_navigation' => _x( 'Hotels list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'hotel' ),
        'items_list'            => _x( 'Hotels list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'hotel' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'        => 'A custom post type for hotels',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'hotel' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => ['category','post_tag'],
        'show_in_rest'       => true
    );
 
    register_post_type( 'hotel', $args );
}

?>