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

function band_customize_register($wp_customize){

    $wp_customize->add_section('band_settings', array(
        'title'    => __('Band Image Settings', 'band'),
        'description' => '',
        'priority' => 120,
    ));

//    //  =============================
//    //  = Text Input                =
//    //  =============================
//    $wp_customize->add_setting('band_theme_options[text_test]', array(
//        'default'        => 'Arse!',
//        'capability'     => 'edit_theme_options',
//        'type'           => 'option',
//
//    ));
//
//    $wp_customize->add_control('band_text_test', array(
//        'label'      => __('Text Test', 'band'),
//        'section'    => 'band_color_scheme',
//        'settings'   => 'band_theme_options[text_test]',
//    ));
//
//    //  =============================
//    //  = Radio Input               =
//    //  =============================
//    $wp_customize->add_setting('band_theme_options[color_scheme]', array(
//        'default'        => 'value2',
//        'capability'     => 'edit_theme_options',
//        'type'           => 'option',
//    ));
//
//    $wp_customize->add_control('band_color_scheme', array(
//        'label'      => __('Color Scheme', 'band'),
//        'section'    => 'band_color_scheme',
//        'settings'   => 'band_theme_options[color_scheme]',
//        'type'       => 'radio',
//        'choices'    => array(
//            'value1' => 'Choice 1',
//            'value2' => 'Choice 2',
//            'value3' => 'Choice 3',
//        ),
//    ));
//
//    //  =============================
//    //  = Checkbox                  =
//    //  =============================
//    $wp_customize->add_setting('band_theme_options[checkbox_test]', array(
//        'capability' => 'edit_theme_options',
//        'type'       => 'option',
//    ));
//
//    $wp_customize->add_control('display_header_text', array(
//        'settings' => 'band_theme_options[checkbox_test]',
//        'label'    => __('Display Header Text'),
//        'section'  => 'band_color_scheme',
//        'type'     => 'checkbox',
//    ));
//
//
//    //  =============================
//    //  = Select Box                =
//    //  =============================
//    $wp_customize->add_setting('band_theme_options[header_select]', array(
//        'default'        => 'value2',
//        'capability'     => 'edit_theme_options',
//        'type'           => 'option',
//
//    ));
//    $wp_customize->add_control( 'example_select_box', array(
//        'settings' => 'band_theme_options[header_select]',
//        'label'   => 'Select Something:',
//        'section' => 'band_color_scheme',
//        'type'    => 'select',
//        'choices'    => array(
//            'value1' => 'Choice 1',
//            'value2' => 'Choice 2',
//            'value3' => 'Choice 3',
//        ),
//    ));
//
//
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('band_theme_options[custom_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_logo', array(
        'label'    => __('Upload Logo', 'band'),
        'section'  => 'band_settings',
        'settings' => 'band_theme_options[custom_logo]',
    )));

    $wp_customize->add_setting('band_theme_options[custom_logo2]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_logo2', array(
        'label'    => __('Upload a Secondary Logo', 'band'),
        'section'  => 'band_settings',
        'settings' => 'band_theme_options[custom_logo2]',
    )));


    $wp_customize->add_setting('band_theme_options[banner]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_logo', array(
        'label'    => __('Upload Banner', 'band'),
        'section'  => 'band_settings',
        'settings' => 'band_theme_options[banner]',
    )));


    //  =============================
    //  = File Upload               =
    //  =============================


    $wp_customize->add_setting('band_theme_options[upload_gif]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_gif', array(
        'label'    => __('Upload GIF Animation', 'band'),
        'section'  => 'band_settings',
        'settings' => 'band_theme_options[upload_gif]',
    )));
//
//
    //  =============================
    //  = Color Picker              =
    //  =============================

    $wp_customize->add_section('band_color_scheme', array(
        'title'    => __('Band Color Settings', 'band'),
        'description' => '',
        'priority' => 140,
    ));

    $wp_customize->add_setting('band_theme_options[base_color]', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'base_color', array(
        'label'    => __('Base Color', 'band'),
        'section'  => 'band_color_scheme',
        'settings' => 'band_theme_options[base_color]',
    )));


    $wp_customize->add_setting('band_theme_options[link_color]', array(
        'default'           => '#337ab7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'band'),
        'section'  => 'band_color_scheme',
        'settings' => 'band_theme_options[link_color]',
    )));



    $wp_customize->add_setting('band_theme_options[link_hover_color]', array(
        'default'           => '#23527c',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_hover_color', array(
        'label'    => __('Link Hover Color', 'band'),
        'section'  => 'band_color_scheme',
        'settings' => 'band_theme_options[link_hover_color]',
    )));



    $wp_customize->add_setting('band_theme_options[nav_link_color]', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_link_color', array(
        'label'    => __('Nav Link Color', 'band'),
        'section'  => 'band_color_scheme',
        'settings' => 'band_theme_options[nav_link_color]',
    )));



    $wp_customize->add_setting('band_theme_options[nav_link_hover_color]', array(
        'default'           => '#00adef',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_link_hover_color', array(
        'label'    => __('Nav Link Hover Color', 'band'),
        'section'  => 'band_color_scheme',
        'settings' => 'band_theme_options[nav_link_hover_color]',
    )));



    $wp_customize->add_setting('band_theme_options[block_quote_color]', array(
        'default'           => '#00adef',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'block_quote_color', array(
        'label'    => __('Quotes Color', 'band'),
        'section'  => 'band_color_scheme',
        'settings' => 'band_theme_options[block_quote_color]',
    )));
//
//
//    //  =============================
//    //  = Page Dropdown             =
//    //  =============================
//    $wp_customize->add_setting('band_theme_options[page_test]', array(
//        'capability'     => 'edit_theme_options',
//        'type'           => 'option',
//
//    ));
//
//    $wp_customize->add_control('band_page_test', array(
//        'label'      => __('Page Test', 'band'),
//        'section'    => 'band_color_scheme',
//        'type'    => 'dropdown-pages',
//        'settings'   => 'band_theme_options[page_test]',
//    ));
//
//    // =====================
//    //  = Category Dropdown =
//    //  =====================
//    $categories = get_categories();
//    $cats = array();
//    $i = 0;
//    foreach($categories as $category){
//        if($i==0){
//            $default = $category->slug;
//            $i++;
//        }
//        $cats[$category->slug] = $category->name;
//    }
//
//    $wp_customize->add_setting('_s_f_slide_cat', array(
//        'default'        => $default
//    ));
//    $wp_customize->add_control( 'cat_select_box', array(
//        'settings' => '_s_f_slide_cat',
//        'label'   => 'Select Category:',
//        'section'  => '_s_f_home_slider',
//        'type'    => 'select',
//        'choices' => $cats,
//    ));
}

add_action('customize_register', 'band_customize_register');