<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 12/22/16
 * Time: 09:57
 */

get_header();


$currentPostId = get_the_ID();
$currentContent = get_the_content();
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
$listCategoryOfPost = get_the_category();
?>
<div id="product-detail" class="container-responsive">
    <div class="product-detail-inner">
        <?php while (have_posts()) {
            the_post(); ?>
            <div class="product-detail">
                <div class="content">
                    <div class="description">
                        <h1 class="title"><?=the_title() ?></h1>
                        <?=the_content(); ?>
                    </div>
                    <div class="image">
                        <div class="image-inner">
                            <a href="<?php echo $thumb_url; ?>" rel="prettyPhoto" class="magnifier-thumb-wrapper">
                                <img src="<?php echo $thumb_url; ?>" id="thumb" class="original zoom">
                            </a>
                            <div class="magnifier-preview" id="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>