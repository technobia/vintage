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
<div class="container-fluid container-responsive giftbox" id="packager">
	<div class="container">
		<?php
		while ($loop->have_posts()) : $loop->the_post();
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];
            echo '<div class="item col-xs-12 col-sm-6 col-md-4">';
            echo '<div class="item-inner">';
            echo '<a href="'.$thumb_url.'" rel="prettyPhoto[gift]">';
            echo '<img src="'.$thumb_url.'"/>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
		endwhile; ?>
	</div>
</div>