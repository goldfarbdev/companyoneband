<?php
/***********************QUOTES************/
function register_cpt_quote() {

    $labels = array(
        'name' => __( 'Quotes', 'quote' ),
        'singular_name' => __( 'Quote', 'quote' ),
        'add_new' => __( 'Add New Quote', 'quote' ),
        'add_new_item' => __( 'Add New Quote', 'quote' ),
        'edit_item' => __( 'Edit Quote', 'quote' ),
        'new_item' => __( 'New Quote', 'quote' ),
        'view_item' => __( 'View Quote', 'quote' ),
        'search_items' => __( 'Search Quotes', 'quote' ),
        'search_items' => __( 'Search Quotes', 'quote' ),
        'not_found' => __( 'No quotes found', 'quote' ),
        'not_found_in_trash' => __( 'No quotes found in Trash', 'quote' ),
        'parent_item_colon' => __( 'Parent Quote:', 'quote' ),
        'menu_name' => __( 'Quotes', 'quote' ),
        'menu_name' => __( 'Quotes', 'quote' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'revisions' ),
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

    register_post_type( 'quote', $args );
}

add_action( 'init', 'register_cpt_quote' );


function change_default_title( $title ){

    $screen = get_current_screen();

    if ( 'quote' == $screen->post_type ){
        $title = 'Enter Quote Source Here';
    }

    return $title;
}
/**********QUOTES END*/