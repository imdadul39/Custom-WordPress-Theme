<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="col-md-4">
            <div class="blog_area">
                <div class="post_thum">
                    <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('custom_size'); ?></a>
                </div>
                <div class="post_details">
                    <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                    <p>
                        <i class="fa-solid fa-calendar-days"></i> <?php echo the_date('d M, Y'); ?>
                        <span>At <i class="fa-regular fa-clock"></i> <?php echo the_time(); ?></span>
                    </p>
                    <p><?php echo wp_trim_words(get_the_content(), 40, ''); ?></p>
                    <a class="read_more" href="<?php the_permalink($post->id); ?>">Read More</a>
                </div>
            </div>
        </div>
<?php
    endwhile;
else :
    _e('Result Not Found', 'xpent');
endif;
?>
<div id="page_nav">
    <?php if ('ali_pagenav') {
        ali_pagenav();
    } else { ?>
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>
    <?php } ?>
</div>