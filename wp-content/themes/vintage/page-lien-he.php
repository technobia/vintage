<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/28/16
 * Time: 10:38 AM
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            // Start the loop.
            while (have_posts()) {
                the_post();
                the_content();
            }
            ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>