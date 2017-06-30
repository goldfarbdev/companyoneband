<?php
function register_cpt_video() {

    $labels = array(
        'name' => __( 'Videos', 'video' ),
        'singular_name' => __( 'Video', 'video' ),
        'add_new' => __( 'Add New Video', 'video' ),
        'add_new_item' => __( 'Add New Video', 'video' ),
        'edit_item' => __( 'Edit Video', 'video' ),
        'new_item' => __( 'New Video', 'video' ),
        'view_item' => __( 'View Video', 'video' ),
        'search_items' => __( 'Search Videos', 'video' ),
        'search_items' => __( 'Search Videos', 'video' ),
        'not_found' => __( 'No videos found', 'video' ),
        'not_found_in_trash' => __( 'No videos found in Trash', 'video' ),
        'parent_item_colon' => __( 'Parent Video:', 'video' ),
        'menu_name' => __( 'Videos', 'video' ),
        'menu_name' => __( 'Videos', 'video' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'revisions', 'custom-fields' ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'video', $args );
}
add_action( 'init', 'register_cpt_video' );
