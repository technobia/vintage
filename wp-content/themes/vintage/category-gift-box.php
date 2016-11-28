<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 11:05 PM
 */
get_header();

$categories = get_the_category_by_ID($cat);
$agrCategory = array('category' => $cat);
$postsCategory = get_posts($agrCategory);

?>
<div class="container-fluid container-responsive" id="packager">
    <div class="container">
        <?php foreach ($postsCategory as $k => $post) {
            setup_postdata($post);
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0]; ?>
            <div class="item col-xs-12 col-sm-6 col-md-4">
                <img src="<?php echo $thumb_url; ?>">
            </div>
        <?php } ?>

        <!--<div class="item col-xs-12 col-sm-6 col-md-4">
            <img src="<?php /*bloginfo('template_url'); */ ?>/assets/img/thumb-1.jpg">
        </div>
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <img src="<?php /*bloginfo('template_url'); */ ?>/assets/img/thumb-1.jpg">
        </div>
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <img src="<?php /*bloginfo('template_url'); */ ?>/assets/img/thumb-1.jpg">
        </div>
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <img src="<?php /*bloginfo('template_url'); */ ?>/assets/img/thumb-1.jpg">
        </div>
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <img src="<?php /*bloginfo('template_url'); */ ?>/assets/img/thumb-1.jpg">
        </div>
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <img src="<?php /*bloginfo('template_url'); */ ?>/assets/img/thumb-1.jpg">
        </div>-->
    </div>
</div>