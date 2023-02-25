<?php

function xpent_add_theme_page()
{
    add_menu_page('Amdin Menu Page', 'Theme Option', 'manage_options', 'xpent-theme-option', 'xpent_theme_create_page', get_template_directory_uri() . '/img/menu-logo.png', 101);


    add_submenu_page('xpent-theme-option', 'Theme Option', 'General', 'manage_options', 'xpent-theme-option', 'xpent_theme_create_page');

    add_submenu_page('xpent-theme-option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'xpent-custom_css', 'xpent_custom_css_page');

    add_submenu_page('xpent-theme-option', 'Theme Custom javaScript', 'Custom JS', 'manage_options', 'xpent-custom_js', 'xpent_custom_js_page');

    //add settings filed with callback test_logo_display.
    add_settings_field("logo", "Logo", "test_logo_display", "theme-options", "first_section");
    register_setting('theme-options-grp', 'logo');
}
add_action('admin_menu', 'xpent_add_theme_page');




function test_logo_display()
{
    //php code to take input file name for logo image.
?>
    
<?php
}
function xpent_theme_create_page()
{
    require_once(get_template_directory() . '/inc/theme_option/general.php');
}
function xpent_custom_css_page()
{
    require_once(get_template_directory() . '/inc/theme_option/custom_css.php');
}

function xpent_custom_js_page()
{
    require_once(get_template_directory() . '/inc/theme_option/custom_js.php');
}
