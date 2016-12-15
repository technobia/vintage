<?php
$currentPostId = get_the_ID();
$currentContent = get_the_content();
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
$listCategoryOfPost = get_the_category();
?>
<div id="product-detail" class="container-responsive">
    <div class="product-detail-inner" style="padding-bottom: 0;">
        <div class="col-xs-12 no-padding">
            <div class="breadcrumb no-margin">
                <ul class="list-inline">
                    <li class="list-inline-item"><span>SẢN PHẨM</span></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span><?=$listCategoryOfPost[0]->name?></span></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span><?=the_title()?></span></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="product-detail-inner">
        <div class="product-detail">
            <div class="content">
                <div class="description">
	                <h1 class="title"><?php the_title() ?></h1>
	                <?php echo $currentContent; ?>
                </div>
                <div class="image">
                    <img src="<?php echo $thumb_url; ?>" data-action="zoom">
                </div>
            </div>
        </div>
    </div>
</div>