<?php
// Theme css and js file calling
function xpent_css_js_file_enqueue()
{
    // CSS Files
    wp_enqueue_style('xpent_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('bx-slider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.2.12', 'all');
    wp_register_style('xpent_theme', get_template_directory_uri() . '/css/xpent_theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bx-slider');
    wp_enqueue_style('xpent_theme');

    // JS Files 
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2 ', 'true');
    wp_enqueue_script('bx-slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12 ', 'true');
    wp_enqueue_script('xpent_main_js', get_template_directory_uri() . '/js/main.js', array(), '5.0.2 ', 'true');
}
add_action('wp_enqueue_scripts', 'xpent_css_js_file_enqueue');