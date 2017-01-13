<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/24/16
 * Time: 11:18 AM
 */
get_header();


$currentPostId = get_the_ID();
$currentContent = get_the_content();
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
$listCategoryOfPost = get_the_category();
$smallDescription = get_post_meta(get_the_ID(), 'small_description', true);
?>
<div id="news-list" class="container-fluid container-responsive">
    <div class="container">
        <div class="col-md-4 left">
            <?php
            $args = array('post_type' => 'news', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post();
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
                $smallDescription = get_post_meta(get_the_ID(), 'small_description', true);
                ?>
                <div class="title-item"><a href="<?=esc_url(get_permalink())?>"><?=the_title()?></a></div>
            <?php } ?>
        </div>
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="col-md-8">
                <div class="product-detail margin-top-15">
                    <div class="description">
                        <h1 class="title"><?= the_title() ?></h1>
                        <?= the_content(); ?>
                        <div><?= $smallDescription ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>