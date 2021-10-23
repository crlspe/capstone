<?php


function load_CSS() {
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons'. false);
    wp_enqueue_style('owl_carousel', get_template_directory_uri().'/vendors/owl-carousel/css/owl.carousel.min.css',false);
    wp_enqueue_style('owl_carousel_theme', get_template_directory_uri().'/vendors/owl-carousel/css/owl.theme.default.css',false);
    wp_enqueue_style('materialize', get_template_directory_uri().'/css/materialize.css',false);
    wp_enqueue_style('main_style', get_template_directory_uri().'/css/style.css',false);
}

add_action('wp_head','load_CSS');


function load_javascript() {
    wp_enqueue_script('jquery', get_template_directory_uri().'/vendors/jquery/jquery.min.js',array(),1,true);
    wp_enqueue_script('materialize_js', get_template_directory_uri().'/vendors/materialize/js/materialize.min.js',array(),1,true);
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri().'/vendors/owl-carousel/js/owl.carousel.min.js',array(),1,true);
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js',array(),1,true);
}

add_action('wp_footer','load_javascript');



function customize_content($wp_customize) {

   	$wp_customize->add_section('ceon-landing-page-section', array(
        'title' => 'Content Landing Page'
    ));


    $wp_customize->add_setting('hero-title', array(
        'default' => 'CEO NetWeavers'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'hero-title-control', array(
        'label' => 'Hero Title',
        'section' => 'ceon-landing-page-section',
        'settings' => 'hero-title'
    )));


    $wp_customize->add_setting('personas-membership-image');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'personas-membership-image-control', array(
        'label' => 'Hero Title',
        'section' => 'ceon-landing-page-section',
        'settings' => 'personas-membership-image',
        'width' => 378,
        'height' => 304
    )));


}

add_action('customize_register', 'customize_content');

add_theme_support('menus');