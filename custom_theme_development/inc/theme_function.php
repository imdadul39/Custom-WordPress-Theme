<?php
// Theme Functions
function xpent_customize_register($wp_customize)
{
    // Header Area Function 
    $wp_customize->add_section('xpent_header_area', array(
        'title' => __('Header Area', 'xpent'),
        'description' => 'You can change Header Logo',
    ));
    $wp_customize->add_setting('xpent_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xpent_logo', array(
        'label' => 'Logo Upload',
        'section' => 'xpent_header_area',
        'setting' => 'xpent_logo',
    )));

    // Header Background Color 
    $wp_customize->add_setting('xpent_header_bg_color', array(
        'default'   => '#dedbd8',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_header_bg_color', array(
        'label' => 'Header Background Color',
        'section' => 'xpent_header_area',
        'setting' => 'xpent_header_bg_color',
    )));
    // Header Menu Hover Background Color 

    $wp_customize->add_setting('xpent_header_Menu_bg_color', array(
        'default'   => '#ea1a70',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_header_Menu_bg_color', array(
        'label' => 'Menu Hover Background',
        'section' => 'xpent_header_area',
        'setting' => 'xpent_header_Menu_bg_color',
    )));
    // Header Menu Text Color
    $wp_customize->add_setting('xpent_header_Menu_text_color', array(
        'default'   => '#606064',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_header_Menu_text_color', array(
        'label' => 'Menu Text Color',
        'section' => 'xpent_header_area',
        'setting' => 'xpent_header_Menu_text_color',
    )));
    // Header Menu Hover Text Color 
    $wp_customize->add_setting('xpent_header_Menu_hover_text_color', array(
        'default'   => '#FFF',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_header_Menu_hover_text_color', array(
        'label' => 'Menu Hover Text Color',
        'section' => 'xpent_header_area',
        'setting' => 'xpent_header_Menu_hover_text_color',
    )));

    // Menu Position 
    $wp_customize->add_section('xpent_menu_option', array(
        'title' => __('Menu Position Option', 'xpent'),
        'description' => 'You can change Header Menu Position',
    ));
    $wp_customize->add_setting('xpent_menu_position', array(
        'default' => "Right Menu",
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('xpent_menu_position', array(
        'label' => 'Menu Position',
        'section' => 'xpent_menu_option',
        'setting' => 'xpent_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'center_menu' => 'Center Menu',
            'right_menu' => 'Right Menu',
        ),
    ));

    // Theme Bg Color Options 
    $wp_customize->add_section('xpent_primary_color_option', array(
        'title' => __('Theme Color', 'xpent'),
        'description' => 'You can change theme color',
    ));
    $wp_customize->add_setting('xpent_theme_bg_color_stting', array(
        'default' => '#fff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_theme_bg_color_stting', array(
        'label' => 'Theme Background color',
        'section' => 'xpent_primary_color_option',
        'setting' => 'xpent_theme_bg_color_stting',
    )));

    // Theme Primary Color Options 
    $wp_customize->add_setting('xpent_theme_primary_color_stting', array(
        'default' => '#ea1a70',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_theme_primary_color_stting', array(
        'label' => 'Theme Primary color',
        'section' => 'xpent_primary_color_option',
        'setting' => 'xpent_theme_primary_color_stting',
    )));
    // Theme Link Color Options 
    $wp_customize->add_setting('xpent_theme_link_color_stting', array(
        'default' => '#fff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_theme_link_color_stting', array(
        'label' => 'Theme Links color',
        'section' => 'xpent_primary_color_option',
        'setting' => 'xpent_theme_link_color_stting',
    )));

    // Theme Hover Background Color Options 
    $wp_customize->add_setting('xpent_theme_hover_bg_color_stting', array(
        'default' => '#e81991',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_theme_hover_bg_color_stting', array(
        'label' => 'Theme Hover Background color',
        'section' => 'xpent_primary_color_option',
        'setting' => 'xpent_theme_hover_bg_color_stting',
    )));
    // Theme Hover Text Color Options 
    $wp_customize->add_setting('xpent_theme_hover_text_color_stting', array(
        'default' => '#b9fc00',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_theme_hover_text_color_stting', array(
        'label' => 'Theme Hover Text color',
        'section' => 'xpent_primary_color_option',
        'setting' => 'xpent_theme_hover_text_color_stting',
    )));


    // Custom Login page logo design 
    $wp_customize->add_section('xpent_custom_login_area', array(
        'title' => __('Custom Login', 'xpent'),
        'description' => 'You can change Header Logo',
    ));
    $wp_customize->add_setting('xpent_custom_login_img', array(
        'default' => get_bloginfo('template_directory') . '/img/apple-logo.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xpent_custom_login_img', array(
        'label' => 'Logo Upload',
        'section' => 'xpent_custom_login_area',
        'setting' => 'xpent_custom_login_img',
    )));

    // Custom Login page background image

    $wp_customize->add_setting('xpent_custom_login_bg', array(
        'default' => get_bloginfo('template_directory') . '/img/bg.jpg',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xpent_custom_login_bg', array(
        'label' => 'Bg Image Upload',
        'section' => 'xpent_custom_login_area',
        'setting' => 'xpent_custom_login_bg',
    )));
    // Custom Login page color control
    $wp_customize->add_setting('xpent_custom_login_color', array(
        'default' => '#ea1a70',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_custom_login_color', array(
        'label' => 'Custom Login Primary Color',
        'section' => 'xpent_custom_login_area',
        'setting' => 'xpent_custom_login_color',
    )));
    // Custom Login page text color control
    $wp_customize->add_setting('xpent_custom_login_text_color', array(
        'default' => '#fff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_custom_login_text_color', array(
        'label' => 'Custom Login text Color',
        'section' => 'xpent_custom_login_area',
        'setting' => 'xpent_custom_login_text_color',
    )));
    // Custom Login page Hover color control
    $wp_customize->add_setting('xpent_custom_login_text_hover_color', array(
        'default' => '#aa0d4e',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_custom_login_text_hover_color', array(
        'label' => 'Custom Login text Color',
        'section' => 'xpent_custom_login_area',
        'setting' => 'xpent_custom_login_text_hover_color',
    )));
};
add_action('customize_register', 'xpent_customize_register');



// Footer Copyright Area =================================
function xpent_footer_copyright_area($wp_customize)
{
    // Footer Area Function 
    $wp_customize->add_section('xpent_footer_option', array(
        'title' => __('Footer Area', 'xpent'),
        'description' => 'You can change Footer Copy Right Text',
    ));
    $wp_customize->add_setting('xpent_footer_copyright', array(
        'default' => "@copy; Developer Imdadul",
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('xpent_footer_copyright', array(
        'label' => 'Copyright Text',
        'section' => 'xpent_footer_option',
        'setting' => 'xpent_footer_copyright',
    ));

    // Footer Copyright Link 
    $wp_customize->add_setting('xpent_footer_copyright_link', array(
        'default' => "#",
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('xpent_footer_copyright_link', array(
        'label' => 'Copyright Text Link',
        'section' => 'xpent_footer_option',
        'setting' => 'xpent_footer_copyright_link',
        'input_attrs' => array(
            'placeholder' => __('www.facebook.com', 'xpent'),
        ),
    ));

    // Footer Copyright Background Color 
    $wp_customize->add_setting('xpent_footer_Bag', array(
        'default' => "#6C757D",
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_footer_Bag', array(
        'label' => 'Background Color',
        'section' => 'xpent_footer_option',
        'setting' => 'xpent_footer_Bag',
    )));
    // Footer Copyright Text Color
    $wp_customize->add_setting('xpent_footer_copyright_text_color', array(
        'default' => 'red !important',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'xpent_footer_copyright_text_color', array(
        'label' => 'Text Color',
        'section' => 'xpent_footer_option',
        'setting' => 'xpent_footer_copyright_text_color',

    )));
}
add_action('customize_register', 'xpent_footer_copyright_area');



function xpent_footer_copyright()
{
?>

    <style>
        /* Theme Bg color  */
        body {
            background-color: <?php echo get_theme_mod('xpent_theme_bg_color_stting'); ?>;
        }

        :root {
            --pink: <?php echo get_theme_mod('xpent_theme_primary_color_stting'); ?>;
        }

        .read_more,
        .main_sidebar ul li a,
        .main_sidebar p a {
            color: <?php echo get_theme_mod('xpent_theme_link_color_stting'); ?>;
        }

        .read_more:hover,
        .main_sidebar ul li a:hover,
        .main_sidebar p a:hover {
            background: <?php echo get_theme_mod('xpent_theme_hover_bg_color_stting'); ?>;
        }

        .read_more:hover,
        .main_sidebar ul li a:hover,
        .main_sidebar p a:hover {
            color: <?php echo get_theme_mod('xpent_theme_hover_text_color_stting'); ?>;
        }

        /* Header Background Color ========================================= */
        #header_area {
            background: <?php echo get_theme_mod('xpent_header_bg_color'); ?>;
        }

        /* Header Menu Hover Text/Bg Color */
        .menu-area ul li:hover,
        .current-menu-item {
            background: <?php echo get_theme_mod('xpent_header_Menu_bg_color'); ?>;
            color: <?php echo get_theme_mod('xpent_header_Menu_hover_text_color'); ?>;
        }

        .menu-area ul li:hover a {
            color: <?php echo get_theme_mod('xpent_header_Menu_hover_text_color'); ?>;
        }

        .menu-area ul li a {
            color: <?php echo get_theme_mod('xpent_header_Menu_text_color'); ?>;
        }

        /* Footer Copyright ================================================= */
        .footer_area {
            background-color: <?php echo get_theme_mod('xpent_footer_Bag'); ?>;
        }

        .footer_area h4 a {
            color: <?php echo get_theme_mod('xpent_footer_copyright_text_color'); ?>;
        }
    </style>

<?php


}
add_action('wp_head', 'xpent_footer_copyright');
