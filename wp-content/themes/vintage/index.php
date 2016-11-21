<?php get_header(); ?>
    <section id="primary" class="content-single content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('content', 'page');
                }
            } ?>

        </main><!-- #main -->
    </section><!-- #primary -->
<?php get_footer(); ?>