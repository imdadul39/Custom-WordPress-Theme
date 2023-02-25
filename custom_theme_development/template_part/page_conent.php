<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="blog_area">
            <div class="post_thum">
                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('custom_size'); ?></a>
            </div>
            <div class="post_details">
                <p><?php the_content(); ?></p>
            </div>
        </div>
<?php
    endwhile;
else :
    _e('Result Not Found', 'xpent');
endif;
?>