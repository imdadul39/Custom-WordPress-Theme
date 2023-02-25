<?php
// Theme Footer Section 
?>

<footer class="footer_area py-4"">
    <section class="footer text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php dynamic_sidebar('footer_1') ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar('footer_2') ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar('footer_3') ?>
            </div>
        </div>
    </div>
    </section>

    <section>
        <div class=" footer_copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4><a target="_blank" href="<?php echo get_theme_mod('xpent_footer_copyright_link'); ?>"><?php echo get_theme_mod('xpent_footer_copyright'); ?></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>