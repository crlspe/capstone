<?php


function load_CSS() {
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons'. false);
    wp_enqueue_style('owl_carousel', get_template_directory_uri().'/vendors/owl-carousel/css/owl.carousel.min.css',false);
    wp_enqueue_style('owl_carousel_theme', get_template_directory_uri().'/vendors/owl-carousel/css/owl.theme.default.css',false);
    wp_enqueue_style('aos', get_template_directory_uri().'/vendors/aos/css/aos.css',false);
    wp_enqueue_style('materialize', get_template_directory_uri().'/css/materialize.css',false);
    wp_enqueue_style('main_style', get_template_directory_uri().'/css/style.css',false);
}

add_action('wp_head','load_CSS');


function load_javascript() {
    wp_enqueue_script('jquery', get_template_directory_uri().'/vendors/jquery/jquery.min.js',array(),1,true);
    wp_enqueue_script('materialize_js', get_template_directory_uri().'/vendors/materialize/js/materialize.min.js',array(),1,true);
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri().'/vendors/owl-carousel/js/owl.carousel.min.js',array(),1,true);
    wp_enqueue_script('aos_js',get_template_directory_uri().'/vendors/aos/js/aos.js',array(),1,true);
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js',array(),1,true);
}

add_action('wp_footer','load_javascript');



function customize_content($wp_customize) {

   	$wp_customize->add_section('ceon-theme-section', array(
        'title' => 'CEO Netweavers Theme Setting'
    ));
    
    $wp_customize->add_setting('contact-email', array(
        'default' => 'pat@ceonetweavers.org'
    ));

    $wp_customize->add_setting('contact-houston-email', array(
        'default' => 'houstonchapterinfo@ceonetweavers.org'
    ));


    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'contact-email-control', array(
        'label' => 'Contact Email (Footer)',
        'section' => 'ceon-theme-section',
        'settings' => 'contact-email'
    )));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'contact-houston-email-control', array(
        'label' => 'Contact Houston Email (Footer)',
        'section' => 'ceon-theme-section',
        'settings' => 'contact-houston-email'
    )));

}

add_action('customize_register', 'customize_content');

add_theme_support('menus');