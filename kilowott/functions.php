<?php
add_theme_support( 'post-thumbnails' );
add_action('init', 'create_custom_post');
function create_custom_post(){
    $supports = array(
        'title', 
        'editor', 
        'author', 
        'thumbnail', 
        'excerpt', 
    );
        $labels = array(
            'name' => _x('Testimonial', 'plural'),
            'singular_name' => _x('testimonial', 'singular'),
            'menu_name' => _x('Testimonial', 'admin menu'),
            'name_admin_bar' => _x('testimonial', 'admin bar'),
            'add_new' => _x('Add New', 'add new'),
            'add_new_item' => __('Add New testimonial'),
            'new_item' => __('New testimonial'),
            'edit_item' => __('Edit testimonial'),
            'view_item' => __('View testimonial'),
            'all_items' => __('All Testimonial'),
            'search_items' => __('Search testimonial'),
            'not_found' => __('No testimonial found.'),
            );    
            $args = array(
                'supports' => $supports,
                'labels' => $labels,
                'description' => 'Holds our Testimonial and specific data',
                'public' => true,
                //'taxonomies' => array( 'category', 'post_tag' ),
                'show_ui' => true,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'show_in_admin_bar' => true,
                'can_export' => true,
                'capability_type' => 'post',
                 'show_in_rest' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'testimonial'),
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 6,
                'menu_icon' => 'dashicons-megaphone',
                );
                
                register_post_type('testimonial', $args); // Register Post type   
}
?>
