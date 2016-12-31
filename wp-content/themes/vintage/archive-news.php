<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 12/29/16
 * Time: 11:03 PM
 */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 5,
    'paged' => $paged
);
$loop = new WP_Query($args);

?>
<div class="container-fluid container-responsive" id="news-list">
    <div class="container">
        <?php

        while ($loop->have_posts()) {
            $loop->the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
            $smallDescription = get_post_meta(get_the_ID(), 'small_description', true);
            ?>
            <div class="item col-xs-12">
                <div class="item-left col-xs-12 col-sm-12 col-md-4">
                    <a href="<?= esc_url(get_permalink()) ?>">
                        <img class="item-object" src="<?php echo $thumb_url; ?>">
                    </a>
                </div>
                <div class="item-body col-xs-12 col-sm-12 col-md-8">
                    <h4 class="item-heading"><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a>
                    </h4>
                    <?php the_content(); ?>
                    <div><?= $smallDescription; ?></div>
                </div>
            </div>
        <?php } ?>
        <?php
        echo '<div class="pagination">';
            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $loop->max_num_pages,
                'prev_text' => __('<'),
                'next_text' => __('>')
            ));
        echo '</div>';
        ?>

    </div>
</div>
