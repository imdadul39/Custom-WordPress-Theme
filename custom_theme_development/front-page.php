<?php

/* Theme Font Page */

get_header(); ?>
<section id="service_area">
    <div class="container">
        <div class="row">
            <?php
            query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var('post'));

            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="col-md-4">
                        <div class="child_service">
                            <h2><?php echo the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('service'); ?></a>
                            <p><?php echo wp_trim_words(get_the_content(), 40, ''); ?></p>
                            <a class="read_more" href="<?php the_permalink($post->id); ?>">Read More</a>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>


        </div>
    </div>
</section>
<sectioon id="slider_area">
    <div class="cotainer">
        <div class="row">
            <div class="com-md-12">
                <div class="slider">
                    <?php
                    query_posts('post_type=slider&post_status=publish&posts_per_page=3&order=ASCpaged=' . get_query_var('post'));
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <div><?php echo the_post_thumbnail(); ?></div>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</sectioon>

<section id="project_area">
    <div class="container">
        <div class="row">
            <?php
            query_posts('post_type=project&post_status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var('post'));

            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="col-md-4">
                        <div class="child_project">
                            <h2><?php echo the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('service'); ?></a>
                            <p><?php echo wp_trim_words(get_the_content(), 40, ''); ?></p>
                            <a class="read_more" href="<?php the_permalink($post->id); ?>">Read More</a>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center py-4">
                <a href="<?php echo home_url();?>/project ">View All</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>