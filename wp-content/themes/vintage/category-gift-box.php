<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 11:05 PM
 */
get_header();

$args = array('post_type' => 'gift_box', 'posts_per_page' => -1);
$loop = new WP_Query($args);

?>
<div class="container-fluid container-responsive" id="packager">
    <div class="container">
        <?php
        while ($loop->have_posts()) {
            $loop->the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
            echo '<div class="item col-xs-12 col-sm-6 col-md-4">
                        <img src="' . $thumb_url . '">';
            echo '</div>';
        } ?>

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