<?php
// Sidebar Register Function
function xpent_widgets_register() {
    register_sidebar(array(
        'name'  =>__('Main Wedget Area', 'xpent'),
        'id'    =>'sidebar_1',
        'description'   =>__('You can add sidebar widget', 'xpent'),
        'before_widget' => '<div class="main_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',

    ));

    register_sidebar(array(
        'name'  =>__('Footer 1', 'xpent'),
        'id'    =>'footer_1',
        'description'   =>__('You can add Footer widget', 'xpent'),
        'before_widget' => '<div class="footer_widget_1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',

    ));

    register_sidebar(array(
        'name'  =>__('Footer 2', 'xpent'),
        'id'    =>'footer_2',
        'description'   =>__('You can add Footer widget', 'xpent'),
        'before_widget' => '<div class="footer_widget_2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',

    ));

    register_sidebar(array(
        'name'  =>__('Footer 3', 'xpent'),
        'id'    =>'footer_3',
        'description'   =>__('You can add Footer widget', 'xpent'),
        'before_widget' => '<div class="footer_widget_3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget_title">',
        'after_title'   => '</h2>',

    ));
};
add_action('widgets_init', 'xpent_widgets_register');