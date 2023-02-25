<?php
// Theme css file calling
function login_enqueue_register()
{
    wp_register_style('login_enqueue_style', get_template_directory_uri() . '/css/login_enqueue.css', array(), '1.0.1', 'all');
    wp_enqueue_style('login_enqueue_style');
}
add_action('login_enqueue_scripts', 'login_enqueue_register');
















// Change Login Logo 
function login_logo_change()
{
?>
    <style>
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_theme_mod('xpent_custom_login_img'); ?>);
        }

        body.login {
            background: url(<?php echo get_theme_mod('xpent_custom_login_bg'); ?>) no-repeat center center / 100% 100%;
        }

        body.login #loginform input[type="text"],
        body.login #loginform input[type="password"],
        .login #login_error,
        .login .message,
        .login .success {
            border: 1px solid <?php echo get_theme_mod('xpent_custom_login_color'); ?>;
            border-left: 5px solid <?php echo get_theme_mod('xpent_custom_login_color'); ?>;
        }


        #login form p.submit input {
            background: <?php echo get_theme_mod('xpent_custom_login_color'); ?>;
            color: <?php echo get_theme_mod('xpent_custom_login_text_color'); ?>;
        }

        #login form p.submit input:hover {
            background: <?php echo get_theme_mod('xpent_custom_login_text_hover_color'); ?>;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'login_logo_change');

// Change Login Logo URL
function login_logo_url_change()
{
    return home_url();
}
add_filter('login_headerurl', 'login_logo_url_change');
