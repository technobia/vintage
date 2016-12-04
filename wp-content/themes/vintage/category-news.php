<?php
/**
 * Created by PhpStorm.
 * User: kanguyen
 * Date: 11/23/16
 * Time: 11:01 PM
 */
get_header();

$categories = get_the_category_by_ID($cat);
$agrCategory = array('category' => $cat,'posts_per_page' => -1,
    'numberposts' => -1);
$postsCategory = get_posts($agrCategory);

?>
<div class="container-fluid container-responsive" id="news-list">
    <div class="container">
        <?php foreach ($postsCategory as $k => $post) {
            setup_postdata($post);
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0]; ?>
            <div class="item col-xs-12">
                <div class="item-left col-xs-12 col-sm-12 col-md-4">
                    <a href="#">
                        <img class="item-object" src="<?php echo $thumb_url; ?>">
                    </a>
                </div>
                <div class="item-body col-xs-12 col-sm-12 col-md-8">
                    <h4 class="item-heading"><a href="#"><?php the_title();?></a></h4>
                    <?php the_content();?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
?>
<!--<div class="container-fluid container-responsive" id="news-list">
	<div class="container">
		<div class="item col-xs-12">
			<div class="item-left col-xs-12 col-sm-12 col-md-4">
				<a href="#">
					<img class="item-object" src="<?php /*bloginfo('template_url'); */?>/assets/img/gallery.jpg">
				</a>
			</div>
			<div class="item-body col-xs-12 col-sm-12 col-md-8">
				<h4 class="item-heading"><a href="#">Media heading</a></h4>
				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
			</div>
		</div>
		<div class="item col-xs-12">
			<div class="item-left col-xs-12 col-sm-12 col-md-4">
				<a href="#">
					<img class="item-object" src="<?php /*bloginfo('template_url'); */?>/assets/img/gallery.jpg">
				</a>
			</div>
			<div class="item-body col-xs-12 col-sm-12 col-md-8">
				<h4 class="item-heading"><a href="#">Media heading</a></h4>
				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
			</div>
		</div>
		<div class="item col-xs-12">
			<div class="item-left col-xs-12 col-sm-12 col-md-4">
				<a href="#">
					<img class="item-object" src="<?php /*bloginfo('template_url'); */?>/assets/img/gallery.jpg">
				</a>
			</div>
			<div class="item-body col-xs-12 col-sm-12 col-md-8">
				<h4 class="item-heading"><a href="#">Media heading</a></h4>
				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
			</div>
		</div>
	</div>
</div>
-->