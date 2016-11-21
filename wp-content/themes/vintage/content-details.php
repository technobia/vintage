<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/21/16
 * Time: 9:57 PM
 */

/**
 * The default template for displaying content
 */
?>
<div class="post-column clearfix">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        // Post thumbnail.
        ?>

        <header class="entry-header">
            <?php
            if (is_single()) {
                the_title('<h1 class="entry-title">', '</h1>');
            } else {
                the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
            } ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                __('Continue reading %s', 'vintage'),
                the_title('<span class="screen-reader-text">', '</span>', false)
            ));

            ?>
        </div><!-- .entry-content -->

    </article><!-- #post-## -->
</div>