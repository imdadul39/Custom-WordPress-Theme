<!-- Main Header  -->
<?php get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mt-3">
                <?php get_template_part('template_part/blog_setup'); ?>
            </div>
            <div class="col-md-3">
                <?php dynamic_sidebar('sidebar_1'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Main Footer  -->
<?php get_footer(); ?>