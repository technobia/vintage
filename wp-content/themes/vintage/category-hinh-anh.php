<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 11:04 PM
 */
get_header();

$args = array('post_type' => 'pictures', 'posts_per_page' => -1);
$loop = new WP_Query($args);

?>
<div class="container-fluid container-responsive giftbox" id="pictures">
    <div id="pictures-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $thumb_num = 0;
            while ($loop->have_posts()) : $loop->the_post();
                $thumb_num++;
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail', true)[0];

                echo '<li data-target="#pictures-carousel" data-slide-to="'.($thumb_num - 1).'" class="'.($thumb_num == 1 ? 'active' : '').'">';
                echo '<img src="'.$thumb_url.'">';
                echo '</li>';
            endwhile;
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $image_num = 0;
            while ($loop->have_posts()) : $loop->the_post();
                $image_num++;
                $thumb_id = get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true)[0];
                echo '<div class="item '.($image_num == 1 ? 'active' : '').'">';
                echo '<img src="'.$image_url.'">';
                echo '</div>';
            endwhile;
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#pictures-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#pictures-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>