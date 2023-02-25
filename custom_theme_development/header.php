<?php
/*
    * This template for displayng the header.
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header_area" class="<?php echo get_theme_mod('xpent_menu_position'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4><?php echo get_option('address-info'); ?></h4>
                </div>
                <div class="col-md-4 text-center">
                    <h4><?php echo get_option('email-info'); ?></h4>
                </div>
                <div class="col-md-4 text-end">
                    <?php echo get_option('xpent_logo'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('xpent_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-10 menu-area">
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'main_menu',
                        'fallback_cb'   => false,
                    )); ?>
                </div>
            </div>
        </div>
    </header>