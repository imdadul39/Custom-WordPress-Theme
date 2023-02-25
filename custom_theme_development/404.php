<!-- Main Header  -->
<?php get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 erroe_page_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/error.png);">

            </div>
            <div class="col-md-6 mt-3">
                <div class="erroe_pages">
                    <p>404 Error - Page not Found</p>
                    <h1>Oops! Something Was Worng</h1>
                    <div class="error_search">
                        <?php get_search_form(); ?>
                    </div>
                    <a href="<?php echo get_home_url(); ?>" class="homepage">Home Page</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Main Footer  -->
<?php get_footer(); ?>