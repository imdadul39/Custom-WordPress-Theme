<?php
// Text Shortcode
function xpent_shortcode()
{
    return 'This is a first shortcode';
}
add_shortcode('xpent', 'xpent_shortcode');


// Button Shortcode
function xpent_btn_shortcode($atts, $content = null)
{
    $btn = shortcode_atts(array(
        'url' => '#',
    ), $atts);
    return '<a class="button" href="' . esc_attr($btn['url']) . '">' . $content . '</a>';
}
add_shortcode('btn', 'xpent_btn_shortcode');


// Service Shortcode 
function xpent_service_shortcode()
{
    ob_start();

    $query = new WP_query(array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',
    ));

    if ($query->have_posts()) {
?>
        <section id="service_area">
            <div class="container">
                <div class="row">
                    <?php
                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="col-md-4">
                            <div class="child_service">
                                <h2><?php echo the_title(); ?></h2>
                                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('service'); ?></a>
                                <p><?php echo wp_trim_words(get_the_content(), 40, ''); ?></p>
                                <a class="read_more" href="<?php the_permalink($query->id); ?>">Read More</a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
    <?php $myVariable = ob_get_clean();
        return $myVariable;
    }
}
add_shortcode('service', 'xpent_service_shortcode');

