<?php

/**
 * Register a custom post type service
 */

function custom_service()
{
    register_post_type('service', array(
        'labels'    => array(
            'name'                  => __('Services', 'xpent'),
            'singular_name'         => __('Service', 'xpent'),
            'menu_name'             => __('Services', 'xpent'),
            'name_admin_bar'        => __('Add New on Service', 'xpent'),
            'add_new'               => __('Add New', 'xpent'),
            'add_new_item'          => __('Add New Service', 'xpent'),
            'new_item'              => __('New Service', 'xpent'),
            'edit_item'             => __('Edit Service', 'xpent'),
            'view_item'             => __('View Service', 'xpent'),
            'all_items'             => __('All Service', 'xpent'),
            'search_items'          => __('Search Services', 'xpent'),
            'not_found'             => __('No Services found.', 'xpent'),
            'featured_image'        => __('Service Cover Image', 'xpent'),
            'set_featured_image'    => __('Set cover image', 'xpent'),

        ),
        'public'             => true,
        'menu_icon'         => 'dashicons-networking',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'Service'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'taxonomies'        =>array('category'),
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    ));
};
add_action('init', 'custom_service');





/**
 * Register a custom post type slider
 */

function custom_slider()
{
    register_post_type('slider', array(
        'labels'    => array(
            'name'                  => __('Sliders', 'xpent'),
            'singular_name'         => __('Slider', 'xpent'),
            'menu_name'             => __('Sliders', 'xpent'),
            'name_admin_bar'        => __('Add New on Slider', 'xpent'),
            'add_new'               => __('Add New', 'xpent'),
            'add_new_item'          => __('Add New Slider', 'xpent'),
            'new_item'              => __('New Slider', 'xpent'),
            'edit_item'             => __('Edit Slider', 'xpent'),
            'view_item'             => __('View Slider', 'xpent'),
            'all_items'             => __('All Slider', 'xpent'),
            'search_items'          => __('Search Sliders', 'xpent'),
            'not_found'             => __('No Sliders found.', 'xpent'),
            'featured_image'        => __('Slider Cover Image', 'xpent'),
            'set_featured_image'    => __('Set cover image', 'xpent'),

        ),
        'public'             => true,
        'menu_icon'         => 'dashicons-images-alt2',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'slider'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    ));
};
add_action('init', 'custom_slider');

/**
 * Register a custom post type Project
 */

 function custom_project()
 {
     register_post_type('project', array(
         'labels'    => array(
             'name'                  => __('projects', 'xpent'),
             'singular_name'         => __('project', 'xpent'),
             'menu_name'             => __('Sliders', 'xpent'),
             'name_admin_bar'        => __('Add New on project', 'xpent'),
             'add_new'               => __('Add New', 'xpent'),
             'add_new_item'          => __('Add New project', 'xpent'),
             'new_item'              => __('New project', 'xpent'),
             'edit_item'             => __('Edit project', 'xpent'),
             'view_item'             => __('View project', 'xpent'),
             'all_items'             => __('All project', 'xpent'),
             'search_items'          => __('Search projects', 'xpent'),
             'not_found'             => __('No projects found.', 'xpent'),
             'featured_image'        => __('project Cover Image', 'xpent'),
             'set_featured_image'    => __('Set cover image', 'xpent'),
 
         ),
         'public'             => true,
         'menu_icon'         => 'dashicons-editor-rtl',
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array('slug' => 'project'),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'hierarchical'       => false,
         'menu_position'      => null,
         'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
     ));
 };
 add_action('init', 'custom_project');
 