<?php
include_once ('extensions/quotes_ext.php');
include_once ('extensions/video_ext.php');


/**VIDEO*********/

/*SCRIPTS*/

add_filter( 'enter_title_here', 'change_default_title' );

function companyone_scripts(){
    wp_enqueue_script( 'modernizer-script', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', '', '2.8.3', false );
    wp_enqueue_script( 'jscroll-script', get_template_directory_uri() . '/js/vendor/jquery.jscroll.min.js', '', '', false );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'lazyload-script', get_template_directory_uri() . '/js/vendor/lazy-load.js', array('jquery'), '', true );
    wp_enqueue_script( 'ias-script', get_template_directory_uri() . '/js/vendor/jquery-ias.min.js', array('jquery'), '', false );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'companyone_scripts' );




// Add the filter to manage the p tags
add_filter( 'the_content', 'removePTag', 0 );

function removePTag( $content )
{
    global $post;

    // Check for single page and image post type and remove
    if ( $post->post_type == 'quote' )
        remove_filter('the_content', 'wpautop');

    return $content;
}


//ALLOW SVG UPLOADS
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');