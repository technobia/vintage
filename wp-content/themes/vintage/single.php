<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/21/16
 * Time: 9:57 PM
 */

get_header(); ?>

<section id="primary" class="content-single content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) {
            the_post();

            get_template_part('content', 'post');

        } ?>

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
