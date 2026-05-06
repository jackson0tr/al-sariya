<?php
function al_sariya_assets() {
    wp_enqueue_style('al-sariya-style', get_stylesheet_uri());
    
    wp_enqueue_script('al-sariya-navbar', get_template_directory_uri() . '/js/navbar.js', array(), null, true);
    wp_enqueue_script('al-sariya-faq', get_template_directory_uri() . '/js/faq.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'al_sariya_assets');

function al_sariya_setup() {
    register_nav_menus(array(
        'primary' => __('القائمة الرئيسية', 'al-sariya')
    ));
}
add_action('after_setup_theme', 'al_sariya_setup');

add_theme_support('post-thumbnails');
?>